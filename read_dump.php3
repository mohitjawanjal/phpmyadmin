<?php
/* $Id$ */
// vim: expandtab sw=4 ts=4 sts=4:


/**
 * Removes comment lines and splits up large sql files into individual queries
 *
 * Last revision: September 23, 2001 - gandon
 *
 * @param   array    the splitted sql commands
 * @param   string   the sql commands
 * @param   integer  the MySQL release number (because certains php3 versions
 *                   can't get the value of a constant from within a function)
 *
 * @return  boolean  always true
 *
 * @access  public
 */
function PMA_splitSqlFile(&$ret, $sql, $release)
{
    $sql          = trim($sql);
    $sql_len      = strlen($sql);
    $char         = '';
    $string_start = '';
    $in_string    = FALSE;
    $time0        = time();

    for ($i = 0; $i < $sql_len; ++$i) {
        $char = $sql[$i];

        // We are in a string, check for not escaped end of strings except for
        // backquotes that can't be escaped
        if ($in_string) {
            for (;;) {
                $i         = strpos($sql, $string_start, $i);
                // No end of string found -> add the current substring to the
                // returned array
                if (!$i) {
                    $ret[] = $sql;
                    return TRUE;
                }
                // Backquotes or no backslashes before quotes: it's indeed the
                // end of the string -> exit the loop
                else if ($string_start == '`' || $sql[$i-1] != '\\') {
                    $string_start      = '';
                    $in_string         = FALSE;
                    break;
                }
                // one or more Backslashes before the presumed end of string...
                else {
                    // ... first checks for escaped backslashes
                    $j                     = 2;
                    $escaped_backslash     = FALSE;
                    while ($i-$j > 0 && $sql[$i-$j] == '\\') {
                        $escaped_backslash = !$escaped_backslash;
                        $j++;
                    }
                    // ... if escaped backslashes: it's really the end of the
                    // string -> exit the loop
                    if ($escaped_backslash) {
                        $string_start  = '';
                        $in_string     = FALSE;
                        break;
                    }
                    // ... else loop
                    else {
                        $i++;
                    }
                } // end if...elseif...else
            } // end for
        } // end if (in string)

        // We are not in a string, first check for delimiter...
        else if ($char == ';') {
            // if delimiter found, add the parsed part to the returned array
            $ret[]      = substr($sql, 0, $i);
            $sql        = ltrim(substr($sql, min($i + 1, $sql_len)));
            $sql_len    = strlen($sql);
            if ($sql_len) {
                $i      = -1;
            } else {
                // The submited statement(s) end(s) here
                return TRUE;
            }
        } // end else if (is delimiter)

        // ... then check for start of a string,...
        else if (($char == '"') || ($char == '\'') || ($char == '`')) {
            $in_string    = TRUE;
            $string_start = $char;
        } // end else if (is start of string)

        // ... for start of a comment (and remove this comment if found)...
        else if ($char == '#'
                 || ($char == ' ' && $i > 1 && $sql[$i-2] . $sql[$i-1] == '--')) {
            // starting position of the comment depends on the comment type
            $start_of_comment = (($sql[$i] == '#') ? $i : $i-2);
            // if no "\n" exits in the remaining string, checks for "\r"
            // (Mac eol style)
            $end_of_comment   = (strpos(' ' . $sql, "\012", $i+2))
                              ? strpos(' ' . $sql, "\012", $i+2)
                              : strpos(' ' . $sql, "\015", $i+2);
            if (!$end_of_comment) {
                // no eol found after '#', add the parsed part to the returned
                // array if required and exit
                if ($start_of_comment > 0) {
                    $ret[]    = trim(substr($sql, 0, $start_of_comment));
                }
                return TRUE;
            } else {
                $sql          = substr($sql, 0, $start_of_comment)
                              . ltrim(substr($sql, $end_of_comment));
                $sql_len      = strlen($sql);
                $i--;
            } // end if...else
        } // end else if (is comment)

        // ... and finally disactivate the "/*!...*/" syntax if MySQL < 3.22.07
        else if ($release < 32270
                 && ($char == '!' && $i > 1  && $sql[$i-2] . $sql[$i-1] == '/*')) {
            $sql[$i] = ' ';
        } // end else if

        // loic1: send a fake header each 30 sec. to bypass browser timeout
        $time1     = time();
        if ($time1 >= $time0 + 30) {
            $time0 = $time1;
            header('X-pmaPing: Pong');
        } // end if
    } // end for

    // add any rest to the returned array
    if (!empty($sql) && ereg('[^[:space:]]+', $sql)) {
        $ret[] = $sql;
    }

    return TRUE;
} // end of the 'PMA_splitSqlFile()' function


if (!function_exists('is_uploaded_file')) {
    /**
     * Emulates the 'is_uploaded_file()' function for old php versions.
     * Grabbed at the php manual:
     *     http://www.php.net/manual/en/features.file-upload.php
     *
     * @param   string    the name of the file to check
     *
     * @return  boolean   wether the file has been uploaded or not
     *
     * @access  public
     */
    function is_uploaded_file($filename) {
        if (!$tmp_file = @get_cfg_var('upload_tmp_dir')) {
            $tmp_file = tempnam('','');
            $deleted  = @unlink($tmp_file);
            $tmp_file = dirname($tmp_file);
        }
        $tmp_file     .= '/' . basename($filename);

        // User might have trailing slash in php.ini...
        return (ereg_replace('/+', '/', $tmp_file) == $filename);
    } // end of the 'is_uploaded_file()' emulated function
} // end if

/**
 * Reads (and decompresses) a (compressed) file into a string
 *
 * @param   string   the path to the file
 * @param   string   the MIME type of the file
 *
 * @global  array    the phpMyAdmin configuration
 *
 * @return  string   the content of the file or
 *          boolean  FALSE in case of an error.
 */
function PMA_readFile($path, $mime = 'text/plain') {
    global $cfg;

    switch ($mime) {
        case 'text/plain':
            $file = fopen($path, 'rb');
            $content = fread($file, filesize($path));
            fclose($file);
            break;
        case 'application/x-gzip':
            if ($cfg['GZipDump'] && @function_exists('gzopen')) {
                $file = gzopen($path, 'rb');
                $content = '';
                while (!gzeof($file)) {
                    $content .= gzgetc($file);
                }
                gzclose($file);
            } else {
                return FALSE;
            }
           break;
        case 'application/x-bzip':
            if ($cfg['BZipDump'] && @function_exists('bzdecompress')) {
                $file = fopen($path, 'rb');
                $content = fread($file, filesize($path));
                fclose($file);
                $content = bzdecompress($content);
            } else {
                return FALSE;
            }
           break;
        default:
           return FALSE;
    }
    if (!file_exists($path)) {
        return FALSE;
    }
    return $content;
}


/**
 * Gets some core libraries
 */
require('./libraries/grab_globals.lib.php3');
require('./libraries/common.lib.php3');


/**
 * Increases the max. allowed time to run a script
 */
@set_time_limit($cfg['ExecTimeLimit']);


/**
 * Defines the url to return to in case of error in a sql statement
 */
if (!isset($goto)
    || ($goto != 'db_details.php3' && $goto != 'tbl_properties.php3')) {
    $goto = 'db_details.php3';
}
$err_url  = $goto
          . '?' . PMA_generate_common_url($db)
          . (($goto == 'tbl_properties.php3') ? '&amp;table=' . urlencode($table) : '');


/**
 * Set up default values for some variables
 */
$view_bookmark = 0;
$sql_bookmark  = isset($sql_bookmark) ? $sql_bookmark : '';
$sql_query     = isset($sql_query)    ? $sql_query    : '';
if (!empty($sql_localfile) && $cfg['UploadDir'] != '') {
    $sql_file  = $cfg['UploadDir'] . $sql_localfile;
} else if (empty($sql_file)) {
    $sql_file  = 'none';
}


/**
 * Bookmark Support: get a query back from bookmark if required
 */
if (!empty($id_bookmark)) {
    include('./libraries/bookmark.lib.php3');
    switch ($action_bookmark) {
        case 0: // bookmarked query that have to be run
            $sql_query = PMA_queryBookmarks($db, $cfg['Bookmark'], $id_bookmark);
            break;
        case 1: // bookmarked query that have to be displayed
            $sql_query = PMA_queryBookmarks($db, $cfg['Bookmark'], $id_bookmark);
            $view_bookmark = 1;
            break;
        case 2: // bookmarked query that have to be deleted
            $sql_query = PMA_deleteBookmarks($db, $cfg['Bookmark'], $id_bookmark);
            break;
    }
} // end if


/**
 * Prepares the sql query
 */
// Gets the query from a file if required
if ($sql_file != 'none') {
// loic1 : fixed a security issue
//    if ((file_exists($sql_file) && is_uploaded_file($sql_file))
//        || file_exists($cfg['UploadDir'] . $sql_localfile)) {
    if (file_exists($sql_file)
        && ((isset($sql_localfile) && $sql_file == $cfg['UploadDir'] . $sql_localfile) || is_uploaded_file($sql_file))) {
        $open_basedir     = '';
        if (PMA_PHP_INT_VERSION >= 40000) {
            $open_basedir = @ini_get('open_basedir');
        }
        if (empty($open_basedir)) {
            $open_basedir = @get_cfg_var('open_basedir');
        }

        // If we are on a server with open_basedir, we must move the file
        // before opening it. The doc explains how to create the "./tmp"
        // directory

        if (!empty($open_basedir)) {

            $tmp_subdir = (PMA_IS_WINDOWS ? '.\\tmp\\' : './tmp/');

            // function is_writeable() is valid on PHP3 and 4
            if (!is_writeable($tmp_subdir)) {
                // if we cannot move the file, let PHP report the error
                error_reporting(E_ALL);
                $sql_query = PMA_readFile($sql_file, $sql_file_compression);
            }
            else {
                $sql_file_new = $tmp_subdir . basename($sql_file);
                if (PMA_PHP_INT_VERSION < 40003) {
                    copy($sql_file, $sql_file_new);
                } else {
                    move_uploaded_file($sql_file, $sql_file_new);
                }
                $sql_query = PMA_readFile($sql_file_new, $sql_file_compression);
                unlink($sql_file_new);
            }
        }
        else {
            // read from the normal upload dir
            $sql_query = PMA_readFile($sql_file, $sql_file_compression);
        }

        if (get_magic_quotes_runtime() == 1) {
            $sql_query = stripslashes($sql_query);
        }
        // Convert the file's charset if necessary
        if ($cfg['AllowAnywhereRecoding'] && $allow_recoding
            && isset($charset_of_file) && $charset_of_file != $charset) {
            $sql_query = PMA_convert_string($charset_of_file, $charset, $sql_query);
        }
    } // end uploaded file stuff
}
else if (empty($id_bookmark) && get_magic_quotes_gpc() == 1) {
    $sql_query = stripslashes($sql_query);
}

// Kanji convert SQL textfile 2002/1/4 by Y.Kawada
if (@function_exists('PMA_kanji_str_conv')) {
    $sql_tmp   = trim($sql_query);
    PMA_change_enc_order();
    $sql_query = PMA_kanji_str_conv($sql_tmp, $knjenc, isset($xkana) ? $xkana : '');
    PMA_change_enc_order();
} else {
    $sql_query = trim($sql_query);
}

// $sql_query come from the query textarea, if it's a reposted query gets its
// 'true' value
if (!empty($prev_sql_query)) {
    $prev_sql_query = urldecode($prev_sql_query);
    if ($sql_query == trim(htmlspecialchars($prev_sql_query))) {
        $sql_query  = $prev_sql_query;
    }
}

// Drop database is not allowed -> ensure the query can be run
if (!$cfg['AllowUserDropDatabase']
    && eregi('DROP[[:space:]]+(IF EXISTS[[:space:]]+)?DATABASE ', $sql_query)) {
    // Checks if the user is a Superuser
    // TODO: set a global variable with this information
    // loic1: optimized query
    $result = @PMA_mysql_query('USE mysql');
    if (PMA_mysql_error()) {
        include('./header.inc.php3');
        PMA_mysqlDie($strNoDropDatabases, '', '', $err_url);
    }
}
define('PMA_CHK_DROP', 1);

/**
 * Executes the query
 */
if ($sql_query != '') {
    $pieces       = array();
    PMA_splitSqlFile($pieces, $sql_query, PMA_MYSQL_INT_VERSION);
    $pieces_count = count($pieces);
    if ($pieces_count > 1) {
        $is_multiple = TRUE;
    }

    // Copy of the cleaned sql statement for display purpose only (see near the
    // beginning of "db_details.php3" & "tbl_properties.php3")
    if ($sql_file != 'none' && $pieces_count > 10) {
         // Be nice with bandwidth...
        $sql_query_cpy = $sql_query = '';
    } else {
        $sql_query_cpy = implode(";\n", $pieces) . ';';
         // Be nice with bandwidth... for now, an arbitrary limit of 500,
         // could be made configurable but probably not necessary
        if (strlen($sql_query_cpy) > 500) {
            $sql_query_cpy = $sql_query = '';
        }
    }

    // really run the query?
    if ($view_bookmark == 0) {
        // Only one query to run
        if ($pieces_count == 1 && !empty($pieces[0])) {
            // sql.php3 will stripslash the query if get_magic_quotes_gpc
            if (get_magic_quotes_gpc() == 1) {
                $sql_query = addslashes($pieces[0]);
            } else {
                $sql_query = $pieces[0];
            }
            if (eregi('^(DROP|CREATE)[[:space:]]+(IF EXISTS[[:space:]]+)?(TABLE|DATABASE)[[:space:]]+(.+)', $sql_query)) {
                $reload = 1;
            }
            include('./sql.php3');
            exit();
        }

        // Runs multiple queries
        else if (PMA_mysql_select_db($db)) {
            $mult = TRUE;
            for ($i = 0; $i < $pieces_count; $i++) {
                $a_sql_query = $pieces[$i];
                $result = PMA_mysql_query($a_sql_query);
                if ($result == FALSE) { // readdump failed
                    $my_die = $a_sql_query;
                    break;
                }
                if (!isset($reload) && eregi('^(DROP|CREATE)[[:space:]]+(IF EXISTS[[:space:]]+)?(TABLE|DATABASE)[[:space:]]+(.+)', $a_sql_query)) {
                    $reload = 1;
                }
            } // end for
        } // end else if
    } // end if (really run the query)
    unset($pieces);
} // end if



/**
 * MySQL error
 */
if (isset($my_die)) {
    $js_to_run = 'functions.js';
    include('./header.inc.php3');
    PMA_mysqlDie('', $my_die, '', $err_url);
}


/**
 * Go back to the calling script
 */
// Checks for a valid target script
if (isset($table) && $table == '') {
    unset($table);
}
if (isset($db) && $db == '') {
    unset($db);
}
$is_db = $is_table = FALSE;
if ($goto == 'tbl_properties.php3') {
    if (!isset($table)) {
        $goto     = 'db_details.php3';
    } else {
        $is_table = @PMA_mysql_query('SHOW TABLES LIKE \'' . PMA_sqlAddslashes($table, TRUE) . '\'');
        if (!($is_table && @mysql_numrows($is_table))) {
            $goto = 'db_details.php3';
            unset($table);
        }
    } // end if... else...
}
if ($goto == 'db_details.php3') {
    if (isset($table)) {
        unset($table);
    }
    if (!isset($db)) {
        $goto     = 'main.php3';
    } else {
        $is_db    = @PMA_mysql_select_db($db);
        if (!$is_db) {
            $goto = 'main.php3';
            unset($db);
        }
    } // end if... else...
}
// Defines the message to be displayed
if (!empty($id_bookmark) && $action_bookmark == 2) {
    $message   = $strBookmarkDeleted;
} else if (!isset($sql_query_cpy)) {
    $message   = $strNoQuery;
} else if ($sql_query_cpy == '') {
    $message   = "$strSuccess&nbsp;:<br />$strTheContent ($pieces_count $strInstructions)&nbsp;";
} else {
    $message   = $strSuccess;
}
// Loads to target script
if ($goto == 'db_details.php3' || $goto == 'tbl_properties.php3') {
    $js_to_run = 'functions.js';
}
if ($goto != 'main.php3') {
    include('./header.inc.php3');
}
require('./' . $goto);
?>
