<?php
/* $Id$ */

/**
 * Translated by Gosha Sakovich <gt2 at users.sourceforge.net>
 *               Artyom Rabzonov <tyomych at gmx.net>
 *               Nicolay Zakharov <aquarius@mobnav.com> 19-Nov-2002
 */

$charset = 'dos-866';
$text_dir = 'ltr';
$left_font_family = 'sans-serif';
$right_font_family = 'sans-serif';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
// shortcuts for Byte, Kilo, Mega, Tera, Peta, Exa
$byteUnits = array('����', '��', '��', '��');

$day_of_week = array('��', '��', '��', '��', '��', '��', '��');
$month = array('���', '���', '���', '���', '���', '��', '��', '���', '���', '���', '���', '���');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%B %d %Y �., %H:%M';

$strAPrimaryKey = '�� �������� ��ࢨ�� ���� � %s';
$strAccessDenied = '� ����㯥 �⪠����';
$strAction = '����⢨�';
$strAddDeleteColumn = '��������/㤠���� �⮫��� �����';
$strAddDeleteRow = '��������/㤠���� �� �����';
$strAddNewField = '�������� ����� ����';
$strAddPriv = '�������� ���� �ਢ������';
$strAddPrivMessage = '�뫠 ��������� ����� �ਢ������';
$strAddSearchConditions = '�������� �᫮��� ���᪠ (⥫� ��� �᫮��� "where"):';
$strAddToIndex = '�������� � �������&nbsp;%s&nbsp;��������(�)';
$strAddUser = '�������� ������ ���짮��⥫�';
$strAddUserMessage = '�� �������� ���� ���짮��⥫�.';
$strAffectedRows = '���஭��� ���:';
$strAfter = '��᫥ %s';
$strAfterInsertBack = '������';
$strAfterInsertNewInsert = '��⠢��� ����� ������';
$strAll = '��';
$strAllTableSameWidth = '�������� �� ⠡���� � ⠪�� �ਭ��?';
$strAlterOrderBy = '�������� ���冷� ⠡����';
$strAnIndex = '�� �������� ������ ��� %s';
$strAnalyzeTable = '������ ⠡����';
$strAnd = '�';
$strAny = '��';
$strAnyColumn = '�� �������';
$strAnyDatabase = '�� ���� ������';
$strAnyHost = '�� ���';
$strAnyTable = '�� ⠡���';
$strAnyUser = '�� ���짮��⥫�';
$strAscending = '�� �����⠭��';
$strAtBeginningOfTable = '� ��砫� ⠡����';
$strAtEndOfTable = '� ����� ⠡����';
$strAttr = '��ਡ���';

$strBack = '�����';
$strBeginCut = 'BEGIN CUT';
$strBeginRaw = 'BEGIN RAW';
$strBinary = ' ������ ';
$strBinaryDoNotEdit = ' ������ ����� - �� ।��������� ';
$strBookmarkDeleted = '�������� �뫠 㤠����.';
$strBookmarkLabel = '��⪠';
$strBookmarkQuery = '�������� �� SQL-�����';
$strBookmarkThis = '�������� �� ����� SQL-�����';
$strBookmarkView = '���쪮 ��ᬮ��';
$strBrowse = '�����';
$strBzip = '��娢�஢��� � bzip';

$strCantLoadMySQL = '���७�� MySQL �� ����㦥��,<br />�஢���� ���䨣���� PHP.';
$strCantLoadRecodeIconv = '�� ���� ����㧨�� iconv ��� recode, ����室��� ��� ��४���஢���� ᨬ�����. �஢���� php-���䨣���� � ࠧ��� �� �ᯮ�짮����� ��� ������ ��४���஢���� ᨬ����� � phpMyAdmin.';
$strCantRenameIdxToPrimary = '���������� ��२�������� ������ � PRIMARY!';
$strCantUseRecodeIconv = '�� ���� �ᯮ�짮���� iconv �㭪樨: �� libiconv, �� recode_string, ���� �� ���� ����㦥�� extension reports. �஢���� php-���䨣����.';
$strCardinality = '������⢮ ������⮢';
$strCarriage = '������ ���⪨: \\r';
$strChange = '��������';
$strChangeDisplay = '�롥�� ���� ��� �⮡ࠦ����';
$strChangePassword = '�������� ��஫�';
$strCharsetOfFile = '����஢�� 䠩��:';
$strCheckAll = '�⬥��� ��';
$strCheckDbPriv = '�஢���� �ਢ������ ��';
$strCheckTable = '�஢���� ⠡����';
$strChoosePage = '�롥�� ��࠭��� ��� ।���஢����';
$strColComFeat = '�������� ��������� �⮫�殢';
$strColumn = '�������';
$strColumnNames = '�������� �������';
$strComments = '�������ਨ';
$strCompleteInserts = '������ ��⠢��';
$strCompression = '���⨥';
$strConfigFileError = 'phpMyAdmin �� ����� ������ ����� �� ���䨣��樮����� 䠩��!  <br />��������� ��稭� - ᨭ⠪��᪠� �訡��.<br />�맮��� ��� 䠩� (config.inc.php) �����।�⢥��� �� ��㧥�. �᫨ ���� ᮮ�饭�� �� �訡��� - ��ࠢ�� ��. �᫨ ����� ��࠭�� - �� � ���浪�';
$strConfigureTableCoord = '������� ���न���� ⠡���� %s';
$strConfirm = '�� ����⢨⥫쭮 ��� ᤥ���� ��?';
$strCookiesRequired = 'Cookies ������ ���� ����祭� ��᫥ �⮣� ����.';
$strCopyTable = '�����஢��� ⠡���� � (���� ������<b>.</b>⠡���):';
$strCopyTableOK = '������ %s �뫠 ᪮��஢��� � %s.';
$strCreate = '�������';
$strCreateIndex = '������� ������ ��&nbsp;%s&nbsp;��������';
$strCreateIndexTopic = '������� ���� ������';
$strCreateNewDatabase = '������� ����� ��';
$strCreateNewTable = '������� ����� ⠡���� � �� %s';
$strCreatePage = '������� ����� ��࠭���';
$strCreatePdfFeat = '�������� PDF-�奬�';
$strCriteria = '���਩';

$strData = '�����';
$strDataDict = '������� ������';
$strDataOnly = '���쪮 �����';
$strDatabase = '�� ';
$strDatabaseHasBeenDropped = '���� ������ %s �뫠 㤠����.';
$strDatabaseWildcard = '���� ������ (�������� �ᯮ�짮����� 蠡�����):';
$strDatabases = '���� ������';
$strDatabasesStats = '����⨪� ��� ������';
$strDefault = '�� 㬮�砭��';
$strDelete = '�������';
$strDeleteFailed = '��㤠筮� 㤠�����!';
$strDeleteUserMessage = '�� 㤠��� ���짮��⥫� %s.';
$strDeleted = '�� �� 㤠���';
$strDeletedRows = '������騥 ��� �뫨 㤠����:';
$strDescending = '�� �뢠���';
$strDisabled = '������㯭�';
$strDisplay = '��������';
$strDisplayFeat = '�������� �������⥫�� ����������';
$strDisplayOrder = '���冷� ��ᬮ��:';
$strDisplayPDF = '�������� PDF-�奬�';
$strDoAQuery = '�믮����� "����� �� �ਬ���" (ᨬ��� ����⠭����: "%")';
$strDoYouReally = '�� ����⢨⥫쭮 ������ ';
$strDocu = '���㬥����';
$strDrop = '����⮦���';
$strDropDB = '����⮦��� �� %s';
$strDropTable = '������� ⠡����';
$strDumpXRows = '���� %s ����ᥩ, ��稭�� � %s.';
$strDumpingData = '���� ������ ⠡����';
$strDynamic = '�������᪨�';

$strEdit = '�ࠢ��';
$strEditPDFPages = '�������� PDF-��࠭���';
$strEditPrivileges = '������஢���� �ਢ������';
$strEffective = '��䥪⨢�����';
$strEmpty = '������';
$strEmptyResultSet = 'MySQL ���㫠 ���⮩ १���� (�.�. ���� �冷�).';
$strEnabled = '����㯭�';
$strEnd = '�����';
$strEndCut = 'END CUT';
$strEndRaw = 'END RAW';
$strEnglishPrivileges = ' �ਬ�砭��: �ਢ������ MySQL �������� ��-������᪨ ';
$strError = '�訡��';
$strExplain = '������ SQL';
$strExport = '��ᯮ��';
$strExportToXML = '��ᯮ�� � XML-�ଠ�';
$strExtendedInserts = '����७�� ��⠢��';
$strExtra = '�������⥫쭮';

$strField = '����';
$strFieldHasBeenDropped = '���� %s �뫮 㤠����';
$strFields = '����';
$strFieldsEmpty = ' ���⮩ ���稪 �����! ';
$strFieldsEnclosedBy = '���� �����祭� �';
$strFieldsEscapedBy = '���� ��࠭�������';
$strFieldsTerminatedBy = '���� ࠧ������';
$strFixed = '䨪�஢����';
$strFlushTable = '������ ��� ⠡���� ("FLUSH")';
$strFormEmpty = '�ॡ���� ���祭�� ��� ���!';
$strFormat = '��ଠ�';
$strFullText = '����� ⥪���';
$strFunction = '�㭪��';

$strGenBy = '��������';
$strGenTime = '�६� ᮧ�����';
$strGeneralRelationFeat = '�᭮��� ���������� �痢�';
$strGo = '��襫';
$strGrants = '�ࠢ�';
$strGzip = '��娢�஢��� � gzip';

$strHasBeenAltered = '�뫠 ��������.';
$strHasBeenCreated = '�뫠 ᮧ����.';
$strHaveToShow = '�� ������ ����� �� ����� ����� ������� ��� �⮡ࠦ����';
$strHome = '� ��砫�';
$strHomepageOfficial = '��樠�쭠� ��࠭�� phpMyAdmin';
$strHomepageSourceforge = '����㧪� phpMyAdmin �� Sourceforge';
$strHost = '����';
$strHostEmpty = '���⮥ ��� ���!';

$strIdxFulltext = '���������';
$strIfYouWish = '�᫨ �� ������ ����㧨�� ⮫쪮 ������� �⮫��� ⠡����, 㪠��� ࠧ������� �����묨 ᯨ᮪ �����.';
$strIgnore = '�����஢���';
$strImportDocSQL = '������ docSQL 䠩���';
$strInUse = '�ᯮ������';
$strIndex = '������';
$strIndexHasBeenDropped = '������ %s �� 㤠���';
$strIndexName = '��� ������&nbsp;:';
$strIndexType = '��� ������&nbsp;:';
$strIndexes = '�������';
$strInsecureMySQL = '��� ���䨣��樮��� 䠩� ᮤ�ন� ����ன�� (���짮��⥫� root ��� ��஫�), ����� �⭮����� � �ਢ�����஢������ ���짮��⥫� MySQL (�� 㬮�砭��). ��� MySQL �ࢥ� ����饭 � �⨬� ����ன���� �� 㬮�砭��, ������ ��� ��থ���, ���⮬� ��� �����⥫쭮 ४��������� ���࠭��� ��� ���� � ������᭮��.';
$strInsert = '��⠢���';
$strInsertAsNewRow = '��⠢��� ���� ��';
$strInsertNewRow = '��⠢��� ���� ��';
$strInsertTextfiles = '��⠢��� ⥪�⮢� 䠩�� � ⠡����';
$strInsertedRows = '��������� ���:';
$strInstructions = '������樨';
$strInvalidName = '"%s" - ���� ��१�ࢨ஢���� ᫮���, �� �� ����� �ᯮ�짮���� ��� � ����⢥ ����� ���� ������/⠡����/����.';

$strKeepPass = '�� ������ ��஫�';
$strKeyname = '��� ����';
$strKill = '�����';

$strLength = '�����';
$strLengthSet = '�����/���祭��*';
$strLimitNumRows = '����ᥩ �� ��࠭���';
$strLineFeed = '������ ����砭�� �����: \\n';
$strLines = '�����';
$strLinesTerminatedBy = '��ப� ࠧ������';
$strLinkNotFound = '���� �� �������';
$strLinksTo = '���� �';
$strLocationTextfile = '�����ᯮ������� ⥪�⮢��� 䠩��';
$strLogPassword = '��஫�:';
$strLogUsername = '���짮��⥫�:';
$strLogin = '�室 � ��⥬�';
$strLogout = '��� �� ��⥬�';

$strMissingBracket = '�ய�饭� ᪮���';
$strModifications = '����䨪�樨 �뫨 ��࠭���';
$strModify = '��������';
$strModifyIndexTopic = '�������� ������';
$strMoveTable = '��६����� ⠡���� � (���� ������<b>.</b>⠡���):';
$strMoveTableOK = '������ %s �뫠 ��६�饭� � %s.';
$strMySQLCharset = 'MySQL-����஢��';
$strMySQLReloaded = 'MySQL ��१���㦥��.';
$strMySQLSaid = '�⢥� MySQL: ';
$strMySQLServerProcess = 'MySQL %pma_s1% �� %pma_s2% ��� %pma_s3%';
$strMySQLShowProcess = '�������� ������';
$strMySQLShowStatus = '�������� ���ﭨ� MySQL';
$strMySQLShowVars = '�������� ��⥬�� ��६���� MySQL';

$strName = '���';
$strNext = '�����';
$strNo = '���';
$strNoDatabases = '�� ����������';
$strNoDescription = '��� ���ᠭ��';
$strNoDropDatabases = '������� "������� ��" �⪫�祭�.';
$strNoExplain = '�४���� ���ᠭ�� SQL';
$strNoFrames = '��� ࠡ��� phpMyAdmin �㦥� ��㧥� � �����প�� <b>�३���</b>.';
$strNoIndex = '������ �� ��।����!';
$strNoIndexPartsDefined = '���� ������ �� ��।�����!';
$strNoModification = '��� ���������';
$strNoPassword = '��� ��஫�';
$strNoPhp = '��� PHP-����';
$strNoPrivileges = '��� �ਢ������';
$strNoQuery = '��� SQL-�����!';
$strNoRights = '�� �� ����� �����筮 �ࠢ ��� �⮣�!';
$strNoTablesFound = '� �� �� �����㦥�� ⠡���.';
$strNoUsersFound = '�� ������ ���짮��⥫�.';
$strNoValidateSQL = '�� �஢����� SQL';
$strNone = '���';
$strNotNumber = '�� �� �᫮!';
$strNotOK = '�� ��⮢�';
$strNotSet = '������ <b>%s</b> �� �������';
$strNotValidNumber = ' �������⨬�� ������⢮ �冷�!';
$strNull = '����';
$strNumSearchResultsInTable = '%s �����(��) � ⠡��� <i>%s</i>';
$strNumSearchResultsTotal = '<b>�⮣�:</b> <i>%s</i> �����(��)';

$strOK = '��⮢�';
$strOftenQuotation = '���筮 ����窨. "�� �롮��" ����砥�, �� ⮫쪮 ���� char � varchar ���������� � ����窨.';
$strOperations = '����樨';
$strOptimizeTable = '��⨬���஢��� ⠡����';
$strOptionalControls = '�� �롮��. ����஫���� ��� ���� ��� ����� ᯥ樠��� ᨬ����.';
$strOptionally = '�� �롮��';
$strOptions = '��樨';
$strOr = '���';
$strOverhead = '�������� ��室�';

$strPHP40203 = '�� �ᯮ���� ����� PHP 4.2.3, ����� ᮤ�ন� ��쥧�� �訡�� �� ࠡ�� � �����-���⮢묨 ��ப��� (mbstring). ������ PHP bug report 19404. ������ ����� PHP �� ४��������� ��� �ᯮ�짮����� � phpMyAdmin.';
$strPHPVersion = '����� PHP';
$strPageNumber = '����� ��࠭���:';
$strPartialText = '������ ⥪���';
$strPassword = '��஫�';
$strPasswordEmpty = '���⮩ ��஫�!';
$strPasswordNotSame = '��஫� �� ���������!';
$strPdfDbSchema = '������� ���� "%s" - ��࠭�� %s';
$strPdfInvalidPageNum = '����।������ ����� PDF-��࠭���!';
$strPdfInvalidTblName = '������ "%s" �� �������!';
$strPdfNoTables = '��� ⠡���';
$strPhp = '������� PHP-���';
$strPmaDocumentation = '���㬥���� �� phpMyAdmin';
$strPmaUriError = '��४⨢� <tt>$cfg[\'PmaAbsoluteUri\']</tt> ������ ���� ��⠭������ � ��襬 ���䨣��樮���� 䠩��!';
$strPos1 = '��砫�';
$strPrevious = '�����';
$strPrimary = '��ࢨ��';
$strPrimaryKey = '��ࢨ�� ����';
$strPrimaryKeyHasBeenDropped = '��ࢨ�� ���� �� 㤠���';
$strPrimaryKeyName = '��� ��ࢨ筮�� ���� ������ ���� PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>������</b> ���� �ਧ����� <b>⮫쪮</b> ��ࢨ筮�� ����!)';
$strPrint = '�����';
$strPrintView = '����� ��� ����';
$strPrivileges = '�ਢ������';
$strProperties = '�����⢠';
$strPutColNames = '������ ������������ ����� � ��ࢮ� ��ப�';

$strQBE = '�����&nbsp;��&nbsp;�ਬ���';
$strQBEDel = '�������';
$strQBEIns = '��⠢���';
$strQueryOnDb = 'SQL-����� �� <b>%s</b>:';

$strReType = '���⢥ত����';
$strRecords = '�����';
$strReferentialIntegrity = '�஢���� 楫��⭮��� ������:';
$strRelationNotWorking = '�������⥫�� ���������� ��� ࠡ��� � �易��묨 ⠡��栬� ������㯭�. ��� ��।������ ��稭� ������ %s�%s.';
$strRelationView = '��易��� ���';
$strReloadFailed = '�� 㤠���� ��१���㧨�� MySQL.';
$strReloadMySQL = '��१���㧨�� MySQL';
$strRememberReload = '�� ������ ��१���㧨�� �ࢥ�.';
$strRenameTable = '��२�������� ⠡���� �';
$strRenameTableOK = '������ %s �뫠 ��२�������� � %s';
$strRepairTable = '��稭��� ⠡����';
$strReplace = '��������';
$strReplaceTable = '�������� ����� ⠡���� ����묨 �� 䠩��';
$strReset = '�����⠭�����';
$strRevoke = '�⬥����';
$strRevokeGrant = '�⬥���� �।��⠢����� �ࠢ';
$strRevokeGrantMessage = '�뫮 �⬥���� �।��⠢����� �ࠢ ��� %s';
$strRevokeMessage = '�� �������� �ਢ������ ��� %s';
$strRevokePriv = '�⬥���� �ਢ������';
$strRowLength = '����� �鸞';
$strRowSize = ' ������ �鸞 ';
$strRows = '���';
$strRowsFrom = '�冷� ��';
$strRowsModeHorizontal = '��ਧ��⠫쭮�';
$strRowsModeOptions = '� %s ०���, ��������� ��᫥ ������ %s �祥�';
$strRowsModeVertical = '���⨪��쭮�';
$strRowsStatistic = '����⨪� �鸞';
$strRunQuery = '�믮����� �����';
$strRunSQLQuery = '�믮����� SQL �����(�) �� �� %�';
$strRunning = '�� %s';

$strSQL = 'SQL';
$strSQLParserBugMessage = '�������� � ��� �訡�� � SQL-�����. ��������, �஢���� �����⥫쭮 ��� ����� � ᮮ⢥��⢨� ����祪. �������� ⠪��, �� �� ��⠥��� ������� ������ 䠩� ��� ���� quoted text area. �� ����� ���஡����� �믮����� ᢮� ����� �१ ����䥩� ��������� ��ப� MySQL. ���ᠭ�� �訡�� MySQL �ࢥ� ���� ����, �������� ��� ������� ������, �� �� �ந��諮. �᫨ � ��� �� ࠢ�� ��������� �஡���� ��� �᫨ ����� �뤠�� �訡�� ⠬, ��� ����䥩� ��������� ��ப� ࠡ�⠥� �ᯥ譮, ���஡�� �������� ᢮� SQL ����� �� ������ ����ᮢ � ��।�����, ����� ������ ��뢠�� �஡����. �� ����� ⠪�� ��᫠�� ���� �� �訡�� ����� � ������ ������ (ᥪ�� CUT):';
$strSQLParserUserError = '������� �������� �訡�� � ��襬 SQL �����. ���ᠭ�� �訡�� �� MySQL �ࢥ� ���� ����, ��������, ��� ������� ��� ࠧ�������';
$strSQLQuery = 'SQL-�����';
$strSQLResult = 'SQL-१����';
$strSQPBugInvalidIdentifer = '���ࠢ���� �����䨪���';
$strSQPBugUnclosedQuote = '��������� ����窠';
$strSQPBugUnknownPunctuation = '�������⭠� ��ப� � �㭪��樥�';
$strSave = '���࠭���';
$strScaleFactorSmall = '����⠡ ᫨誮� �����쪨� ��� �⮡ࠦ���� �ᥩ ⠡���� �� ����� ��࠭��';
$strSearch = '�᪠��';
$strSearchFormTitle = '�᪠�� � ���� ������';
$strSearchInTables = '� ⠡���(��):';
$strSearchNeedle = '�����(�) ��� ���祭��(�) ��� ���᪠ (������ "%") �:';
$strSearchOption1 = '��� ���� ᫮��';
$strSearchOption2 = '�� ᫮��';
$strSearchOption3 = '�筮� ᮮ⢥��⢨�';
$strSearchOption4 = 'ॣ��୮� ��ࠦ����';
$strSearchResultsFor = '�᪠�� � "<i>%s</i>" %s:';
$strSearchType = '�᪠��:';
$strSelect = '�����';
$strSelectADb = '�롥�� ��';
$strSelectAll = '�⬥��� ��';
$strSelectFields = '����� ���� (������ ����):';
$strSelectNumRows = '�� ������';
$strSelectTables = '�롥�� ⠡����(�)';
$strSend = '��᫠��';
$strServer = '��ࢥ� %s';
$strServerChoice = '�롮� �ࢥ�';
$strServerVersion = '����� �ࢥ�';
$strSetEnumVal = '��� ⨯�� ���� "enum" � "set", ������ ���祭�� �� �⮬� �ଠ��: \'a\',\'b\',\'c\'...<br />�᫨ ��� ������������ ����� ������ ����� ���� ("\"") ��� �������� ������ ("\'") �।� ��� ���祭��, ���⠢�� ��। ���� ������ ����� ���� (���ਬ��, \'\\\\xyz\' ��� \'a\\\'b\').';
$strShow = '��������';
$strShowAll = '�������� ��';
$strShowColor = '�������� 梥�';
$strShowCols = '�������� �������';
$strShowGrid = '�������� ���';
$strShowPHPInfo = '�������� ���ଠ�� � PHP';
$strShowTableDimension = '�������� ࠧ��୮��� ⠡����';
$strShowTables = '�������� ⠡����';
$strShowThisQuery = ' �������� ����� ����� ᭮�� ';
$strShowingRecords = '�����뢠�� ����� ';
$strSingly = '(�⤥�쭮)';
$strSize = '������';
$strSort = '�����஢���';
$strSpaceUsage = '�ᯮ��㥬�� ����࠭�⢮';
$strSplitWordsWithSpace = '�����, ࠧ������� �஡���� (" ").';
$strStatement = '��ࠦ����';
$strStrucCSV = 'CSV �����';
$strStrucData = '������� � �����';
$strStrucDrop = '�������� 㤠����� ⠡����';
$strStrucExcelCSV = 'CSV ��� ������ Ms Excel';
$strStrucOnly = '���쪮 ��������';
$strStructPropose = '�।�������� ������� ⠡����';
$strStructure = '�������';
$strSubmit = '�믮�����';
$strSuccess = '��� SQL-����� �� �ᯥ譮 �믮����';
$strSum = '�ᥣ�';

$strTable = '⠡��� ';
$strTableComments = '�������਩ � ⠡���';
$strTableEmpty = '���⮥ �������� ⠡����!';
$strTableHasBeenDropped = '������ %s �뫠 㤠����';
$strTableHasBeenEmptied = '������ %s �뫠 ��饭�';
$strTableHasBeenFlushed = '�� ��襭 ��� ⠡���� %s';
$strTableMaintenance = '���㦨����� ⠡����';
$strTableStructure = '������� ⠡����';
$strTableType = '��� ⠡����';
$strTables = '%s ⠡���(�)';
$strTextAreaLength = ' ��-�� ����让 �����,<br /> �� ���� �� ����� ���� ��।���஢���� ';
$strTheContent = '����ন��� 䠩�� �뫮 ������஢���.';
$strTheContents = '����ন��� 䠩�� ����頥� ᮤ�ন��� ⠡���� ��� �冷� � ������묨 ��ࢨ�묨 ��� 㭨����묨 ���砬�.';
$strTheTerminator = '������ ����砭�� �����.';
$strTotal = '�ᥣ�';
$strType = '���';

$strUncheckAll = '����� �⬥�� � ���';
$strUnique = '������쭮�';
$strUnselectAll = '����� �⬥�� � ���';
$strUpdatePrivMessage = '�뫨 �������� �ਢ������ ���';
$strUpdateProfile = '�������� ��䨫�:';
$strUpdateProfileMessage = '��䨫� �� ��������.';
$strUpdateQuery = '��������� �����';
$strUsage = '�ᯮ�짮�����';
$strUseBackquotes = '����� ����窨 � ��������� ⠡��� � �����';
$strUseTables = '�ᯮ�짮���� ⠡����';
$strUser = '���짮��⥫�';
$strUserEmpty = '���⮥ ��� ���짮��⥫�!';
$strUserName = '��� ���짮��⥫�';
$strUsers = '���짮��⥫�';

$strValidateSQL = '�஢���� SQL';
$strValidatorError = '�஢�ઠ SQL �� ����� ���� ���樠����஢���. �஢����, ��⠭������ �� ����室��� ���㫨 ���७�� ��� PHP, ���ᠭ�� � %s���㬥��樨%s.';
$strValue = '���祭��';
$strViewDump = '��ᬮ���� ���� ⠡����';
$strViewDumpDB = '��ᬮ���� ���� ��';

$strWebServerUploadDirectory = '��४���, �㤠 ��������� ����砭�� 䠩�� �� web-�ࢥ�';
$strWebServerUploadDirectoryError = '��४���, ������ �� ��⠭����� ��� "upload" �� ����� ���� �����';
$strWelcome = '���� ���������� � %s';
$strWithChecked = '� �⬥祭�묨:';
$strWrongUser = '�訡��� �����/��஫�. � ����㯥 �⪠����.';

$strYes = '��';

$strZip = '��娢�஢��� � zip';

// To translate
$strNumTables = 'Tables'; //to translate
$strTotalUC = 'Total'; //to translate
$strRelationalSchema = 'Relational schema';  //to translate
$strTableOfContents = 'Table of contents';  //to translate
$strCannotLogin = 'Cannot login to MySQL server';  //to translate
$strShowDatadictAs = 'Data Dictionary Format';  //to translate
$strLandscape = 'Landscape';  //to translate
$strPortrait = 'Portrait';  //to translate

$timespanfmt = '%s days, %s hours, %s minutes and %s seconds'; //to translate

$strAbortedClients = 'Aborted'; //to translate
$strConnections = 'Connections'; //to translate
$strFailedAttempts = 'Failed attempts'; //to translate
$strGlobalValue = 'Global value'; //to translate
$strMoreStatusVars = 'More status variables'; //to translate
$strPerHour = 'per hour'; //to translate
$strQueryStatistics = '<b>Query statistics</b>: Since its startup, %s queries have been sent to the server.';
$strQueryType = 'Query type'; //to translate
$strReceived = 'Received'; //to translate
$strSent = 'Sent'; //to translate
$strServerStatus = 'Runtime Information'; //to translate
$strServerStatusUptime = 'This MySQL server has been running for %s. It started up on %s.'; //to translate
$strServerTabVariables = 'Variables'; //to translate
$strServerTabProcesslist = 'Processes'; //to translate
$strServerTrafficNotes = '<b>Server traffic</b>: These tables show the network traffic statistics of this MySQL server since its startup.';
$strServerVars = 'Server variables and settings'; //to translate
$strSessionValue = 'Session value'; //to translate
$strTraffic = 'Traffic'; //to translate
$strVar = 'Variable'; //to translate

$strCommand = 'Command'; //to translate
$strCouldNotKill = 'phpMyAdmin was unable to kill thread %s. It probably has already been closed.'; //to translate
$strId = 'ID'; //to translate
$strProcesslist = 'Process list'; //to translate
$strStatus = 'Status'; //to translate
$strTime = 'Time'; //to translate
$strThreadSuccessfullyKilled = 'Thread %s was successfully killed.'; //to translate

$strBzError = 'phpMyAdmin was unable to compress the dump because of a broken Bz2 extension in this php version. It is strongly recommended to set the <code>$cfg[\'BZipDump\']</code> directive in your phpMyAdmin configuration file to <code>FALSE</code>. If you want to use the Bz2 compression features, you should upgrade to a later php version. See php bug report %s for details.'; //to translate
$strLaTeX = 'LaTeX';  //to translate
?>
