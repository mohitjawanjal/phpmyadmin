<?php
/* $Id$ */

//�eviride eksik veya hatal� oldu�unu d���nd���n�z k�s�mlar� bora@ktu.edu.tr adresine g�nderebilirsiniz...
//bora alio�lu 02.08.2002...tempus fugit...

$charset = 'iso-8859-9';
$text_dir = 'ltr';
$left_font_family = 'verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = 'arial, helvetica, geneva, sans-serif';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('Byte', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');
//veritabanlar� terminolojisinde terc�meye pek m�sait olmayan index ve unique s�zc�kleri aynen kullan�ld�: uniqe=e�siz,tek
$day_of_week = array('Pazar', 'Pazartesi', 'Sal�', '�ar�amba', 'Per�embe', 'Cuma', 'Cumartesi');
$month = array('Ocak', '�ubat', 'Mart', 'Nisan', 'May�s', 'Haziran', 'Temmuz', 'A�ustos', 'Eyl�l', 'Ekim', 'Kas�m', 'Aral�k');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%B %d, %Y at %I:%M %p';

$strAccessDenied = 'Eri�im engellendi';
$strAction = 'Eylem';
$strAddDeleteColumn = 'S�tun alan� Ekle/Sil';
$strAddDeleteRow = 'Kriter sat�r� Ekle/Sil';
$strAddNewField = 'Yeni alan ekle';
$strAddPriv = 'Yeni ayr�cal�k ekle';
$strAddPrivMessage = 'Yeni ayr�cal�k eklediniz..';
$strAddSearchConditions = 'Arama durumu ekle ("where" c�mleci�i i�in):';
$strAddToIndex = '%s s�tununu(s�tunlar&#305;na) index ekle';
$strAddUser = 'Yeni kullan�c� ekle';
$strAddUserMessage = 'Yeni bir kullan�c� eklediniz.';
$strAffectedRows = 'Etkilenen sat�rlar:';
$strAfter = 'Sonuna %s';
$strAfterInsertBack = 'Return';
$strAfterInsertNewInsert = 'Yeni kayit ekle';
$strAll = 'T�m�';
$strAllTableSameWidth = 'B�t�n tablolar� ayn� geni�likte g�ster';
$strAlterOrderBy = 'Tabloyu de�i�tir ve �una g�re s�rala:';
$strAnalyzeTable = 'Tabloyu analiz et';
$strAnd = 'Ve';
$strAnIndex = '%s �zerinde yeni bir index eklendi';
$strAny = 'Herhangi';
$strAnyColumn = 'Herhangi s�tun';
$strAnyDatabase = 'Herhangi veritaban�';
$strAnyHost = 'Herhangi sunucu';
$strAnyTable = 'Herhangi tablo';
$strAnyUser = 'Herhangi kullan�c�';
$strAPrimaryKey = '%s �zerinde birincil index eklendi';
$strAscending = 'Artan';
$strAtBeginningOfTable = 'Tablonun ba��nda';
$strAtEndOfTable = 'Tablonun sonunda';
$strAttr = '�zellikler';

$strBack = 'Geri';
$strBinary = 'Binari';
$strBinaryDoNotEdit = 'Binari - d�zenlemeyiniz';
$strBookmarkDeleted = 'Bookmark silindi.';
$strBookmarkLabel = 'Etiket';
$strBookmarkQuery = ' SQL-sorgusu';
$strBookmarkThis = 'Bu SQL-sorgusunu i�aretle';
$strBookmarkView = 'Sadece g�zat';
$strBrowse = 'Tara';
$strBzip = '"bzipped"';

$strCantLoadMySQL = 'mySQL uzant�s�n� y�kleyemiyor,<br />l�tfen PHP ayarlar�n� kontrol ediniz.';
$strCantLoadRecodeIconv = 'Karakter seti d�n���m� i�in gerekli olan Iconv veya recode uzant�lar�n� y�kleyenemiyor.  Php\'nin bu uzant�lara izin vermesini sa�lay�n veya phpMyAdmin i�inde karakter d�n���m�n� devre d��� b�rak�n�z...';
$strCantRenameIdxToPrimary = 'Index\'i PRIMARY olarak adland&#305;r&#305;mazs&#305;n&#305;z!';
$strCantUseRecodeIconv = 'Uzant� raporlar� y�klenmi�ken , ne iconv ne libinconv ne de recode_string fonksiyonu  kullan�lamaz.  Php ayarlar�n�z� kontrol ediniz.';
$strCardinality = 'En �nemli';
$strCarriage = 'Enter Karakteri: \\r';
$strChange = 'De�i�tir';
$strChangeDisplay = 'G�rmek istedi�iniz alan� se�iniz';
$strChangePassword = '�ifre De�i�tir';
$strCharsetOfFile = 'Dosyan�n karakter seti:';
$strCheckAll = 'T�m�n� se�';
$strCheckDbPriv = 'Veritaban� �nceliklerini kontrol et';
$strCheckTable = 'Tabloyu kontrol et';
$strChoosePage = 'L�tfen d�zenlemek istedi�iniz sayfay� se�in';
$strColComFeat = 'S�tun yorumlar� g�steriliyor';
$strColumn = 'S�tun';
$strColumnNames = 'S�tun adlar�';
$strComments = 'Yorumlar';
$strCompleteInserts = 'Tamamlanm�� eklemeler';
$strConfigFileError ='phpMyAdmin konfigurasyon dosyan�z� okuyamad�....<br /> Bu php yorumlama hatas� buldu�u zaman veya dosyay� bulamad��� zaman meydana gelebilir..<br /> L�tfen a�a��daki linki kullanarak dosyay� direkt olarak �a��r�n ve ald���n�z php hata mesajlar�n� okuyunuz.�o�u durumda herhangi bir yerde t�rnak veya noktal� virg�l eksiktir<br /> Bo� bir sayfayla kar��la��rsan�z ,her�ey yolunda demektir.';
$strConfigureTableCoord = ' L�tfen %s tablosu i�in koordinatlar� yap�land�r�n�z';
$strConfirm = 'A�a��daki komutu uygulamak istedi�inizden emin misiniz?';
$strCookiesRequired = 'Cookieler a�&#305;k olmal&#305;d&#305;r.';
$strCopyTable = 'Tabloyu (veritaban�<b>.</b>tablo) kopyala:';
$strCopyTableOK = '%s tablosu %s �zerine kopyaland�.';
$strCreate = 'Git';
$strCreateIndex = '%s s�tununda yeni bir index olu&#351;tur';
$strCreateIndexTopic = 'Yeni bir index olu&#351;tur';
$strCreateNewDatabase = 'Yeni veritaban� olu�tur';
$strCreateNewTable = '%s veritaban� �zerinde yeni bir tablo olu�tur';
$strCreatePage = 'Yeni sayfa olu�tur';
$strCreatePdfFeat = 'PDF\'lerin olu�turulmas�';
$strCriteria = 'Kriter';

$strData = 'Veri';
$strDatabase = 'Veritaban� ';
$strDatabaseHasBeenDropped = '%s veritaban� kald�r�ld�.';
$strDatabases = 'veritabanlar�';
$strDatabasesStats = 'Veritaban� istatistikleri';
$strDatabaseWildcard = 'Veritaban� (* izin verili):';
$strDataOnly = 'Sadece veri';
$strDefault = 'Varsay�lan';
$strDelete = 'Sil';
$strDeleted = 'Sat�r silindi.';
$strDeletedRows = 'Silinen sat�rlar:';
$strDeleteFailed = 'Silme s�ras�nda hata olu�tu!';
$strDeleteUserMessage = '%s kullan�c�s�n� sildiniz.';
$strDescending = 'Azalan';
$strDisabled = 'Etkin de�il';
$strDisplay = 'G�r�nt�le';
$strDisplayFeat = '�zellikleri G�ster';
$strDisplayOrder = 'G�r�n�m d�zeni:';
$strDisplayPDF = 'PDF �emas�n� g�ster';
$strDoAQuery = '"�rnekle sorgu" yap (joker: "%")';
$strDocu = 'Yard�m';
$strDoYouReally = 'A�a��daki komutu uygulamak istedi�inizden emin misiniz? ';
$strDrop = 'Kald�r';
$strDropDB = 'Veritaban�\'n� kald�r %s';
$strDropTable = 'Tablo\'yu kald�r';
$strDumpingData = 'Tablo d�k�m verisi';
$strDumpXRows = ' %s sat�rdan ba�layarak  %s a kadar ��kt� �ret.';
$strDynamic = 'dinamik';

$strEdit = 'D�zenle';
$strEditPDFPages = ' PDF Sayfalar�n� d�zenle';
$strEditPrivileges = '�ncelikleri D�zenle';
$strEffective = 'Efektif';
$strEmpty = 'Bo�alt';
$strEmptyResultSet = 'MySQL bo� bir sonuc k�mesi d�nd�rd� ( s�f�r sat�r).';
$strEnabled = 'Etkin';
$strEnd = 'Son';
$strEnglishPrivileges = ' Not: mySQL  �ncelik adlar� �ngilizce olarak belirtilmi�tir ';
$strError = 'Hata';
$strExplain = 'SQL\'i a��kla';
$strExport = 'D�n��t�r';
$strExportToXML = 'XML format�na d�n��t�r';
$strExtendedInserts = 'Geni�letilmi� eklemeler';
$strExtra = 'Ayr�ca';

$strField = 'Alan';
$strFieldHasBeenDropped = '%s alan� kald�r�lm��t�r';
$strFields = 'Alanlar';
$strFieldsEmpty = ' Alan say�s� bo�! ';
$strFieldsEnclosedBy = 'Alan ay�r�c� i�aret';//it does not seem well but just works
$strFieldsEscapedBy = 'Ka��� simgesi(�zel i�aretler i�in)';//it does not seem well but just works
$strFieldsTerminatedBy = 'Alan bitirici i�aret';//it does not stand seem but just works
$strFixed = 'sabit';
$strFlushTable = 'Tabloyu kapat("FLUSH")';
$strFormat = 'Bi�im';
$strFormEmpty = 'Form\'da eksik de�er !';
$strFullText = 'T�m metinler';
$strFunction = 'Fonksiyon';

$strGenBy = 'Olu�turuldu->:';
$strGeneralRelationFeat = 'Genel ili�ki �zellikleri';
$strGenTime = '��kt� Tarihi';
$strGo = 'Git';
$strGrants = 'Haklar';
$strGzip = '"gziplenmi�"';

$strHasBeenAltered = 'd�zenlendi.';
$strHasBeenCreated = 'yarat�ld�.';
$strHaveToShow = 'G�r�nt�lemek i�in en az bir s�tun se�melisiniz';
$strHome = 'Ana Sayfa';
$strHomepageOfficial = 'phpMyAdmin Web Sayfas�';
$strHomepageSourceforge = 'Sourceforge phpMyAdmin Y�kleme Sayfas�';
$strHost = 'Sunucu:';
$strHostEmpty = 'Sunucu ismi alan� doldurulmad�!';

$strIdxFulltext = 'T�m metinler';
$strIfYouWish = 'E�er bir tablo\'nun sadece baz� s�tunlar�n� y�klemek istiyorsan�z,virg�llerle ayr�lm�� bir alan listesi belirtiniz.';
$strIgnore = 'Yoksay';
$strIndex = 'Index';
$strIndexes = 'Index\'ler';
$strIndexHasBeenDropped = '%s index\'i silindi.';
$strIndexName = 'Index ismi :';
$strIndexType = 'Index tipi :';
$strInsert = 'Ekle';
$strInsertAsNewRow = 'Yeni bir sat�r olarak ekle';
$strInsertedRows = 'Eklenen sat�rlar:';
$strInsertNewRow = 'Yeni sat�r ekle';
$strInsertTextfiles = 'Tablo i�ine metin dosyas� ekle';
$strInstructions = 'Talimatlar';
$strInUse = 'kullan�mda';
$strInvalidName = '"%s" s�zc��� kullan�lamayan s�zc�k.Veritaban�/tablo/alan ismi olarak kullanamass�n�z, you can\'t use it as a database/table/field name.';

$strKeepPass = '�ifreyi de�i�tirme';
$strKeyname = 'Anahtar ismi';
$strKill = 'Kapat';

$strLength = 'Boyut';
$strLengthSet = 'Boyut/De�erler*';
$strLimitNumRows = 'Sayfa ba&#351;&#305;na kay&#305;t say&#305;s&#305;';
$strLineFeed = 'Sat�r: \\n';
$strLines = 'Sat�rlar';
$strLinesTerminatedBy = 'Sat�r sonu';
$strLinkNotFound = 'Link bulunamad�';
$strLinksTo = 'Linkler->';
$strLocationTextfile = 'Dosyadan y�kle';
$strLogin = 'Login';
$strLogout = '��k��';
$strLogPassword = '&#350;ifre:';
$strLogUsername = 'Kullan&#305;c&#305; Ad&#305;:';

$strMissingBracket = 'Parantez eksik';
$strModifications = 'De�i�iklikler kaydedildi';
$strModify = 'De�i�tir';
$strModifyIndexTopic = 'Index d�zenle';
$strMoveTable = 'Tabloyu (veritaban�<b>.</b>tablo) ta��:';
$strMoveTableOK = '%s tablosu %s �zerine ta��nd�.';
$strMySQLCharset = 'MySQL karakter seti';
$strMySQLReloaded = 'MySQL yeniden y�klendi.';
$strMySQLSaid = 'MySQL ��kt�s�: ';
$strMySQLServerProcess = ' MySQL %pma_s1%   %pma_s2%  �zerinde  %pma_s3% olarak �al���yor';
$strMySQLShowProcess = '��lemleri g�ster';
$strMySQLShowStatus = 'MySQL �al��ma zaman� bilgisini g�ster';
$strMySQLShowVars = 'MySQL sistem de�i�kenlerini g�ster';

$strName = '�sim';
$strNext = 'Sonraki';
$strNo = 'Hay�r';
$strNoDatabases = 'Veritaban� yok';
$strNoDescription = 'Tan�mlama yok';
$strNoDropDatabases = '"DROP DATABASE" c�mlesi burada kullan�lamaz.';
$strNoExplain = 'SQL a��klamas�n� yapma';
$strNoFrames = 'phpMyAdmin frame destekli bir taray&#305;c&#305; ile daha iyi �al&#305;&#351;maktad&#305;r...';
$strNoIndex = 'Index tan&#305;mlanmad&#305;!';
$strNoIndexPartsDefined = 'Index k&#305;sm&#305; tan&#305;mlanmad&#305;!';
$strNoModification = 'De�i�iklik yok';
$strNone = 'Hi�biri';
$strNoPassword = '�ifre yok';
$strNoPhp = ' PHP kodsuz';
$strNoPrivileges = 'Ayr�cal�k yok';
$strNoQuery = 'SQL sorgusu yok!';
$strNoRights = 'Burada bulunmak i�in yeterli haklara sahip de�ilsiniz!';
$strNoTablesFound = 'Veritaban�\'nda tablo bulunamad�.';
$strNotNumber = 'Bu bir say� de�il!';
$strNotOK = 'Tamam de�il';
$strNotSet = '<b>%s</b> tablosu bulunamad� veya %s i�inde tan�mlanmad�';
$strNotValidNumber = ' ge�erli bir sat�r say�s� de�il!';
$strNoUsersFound = 'Kullan�c�(lar) bulunamad�.';
$strNoValidateSQL = 'SQL do�rulamas�n� yapma';
$strNull = 'Bo�';
$strNumSearchResultsInTable = '%s e�le�im : %s tablosu i�inde';
$strNumSearchResultsTotal = 'Toplam: %s e�le�im';

$strOftenQuotation = 'S�k kullan�lan aktarma i�aretleri.SE��ME BA�LI,sadece char ve varchar alanlar�n�n "enclosed-by" karakteri ile �evrenelece�i anlam�na gelir..';
$strOK = 'Tamam';
$strOperations = '��lemler';
$strOptimizeTable = 'Tabloyu optimize et';
$strOptionalControls = '�zel karakterleri yazmak ve okumak i�in kontroller.Opsiyonel';
$strOptionally = 'Se�ime Ba�l�';
$strOptions = 'Se�enekler';
$strOr = 'veya';
$strOverhead = 'Kullan&#305;lamayan Veri';

$strPageNumber = 'Sayfa numaras�:';
$strPartialText = 'B�l�msel Metinler';
$strPassword = '�ifre';
$strPasswordEmpty = '�ifre alan� doldurulmad�!';
$strPasswordNotSame = 'Girilen �ifreler ayn� de�il!';
$strPdfDbSchema = ' "%s" veritaban�n�n �emas� - Sayfa %s';
$strPdfInvalidPageNum = 'Tan�mlanmam�� PDF sayfa numaras�!';
$strPdfInvalidTblName = ' "%s" tablosu bulunam�yor !';
$strPhp = 'PHP kodu olu�tur';
$strPHPVersion = 'PHP S�r�m�';
$strPmaDocumentation = 'phpMyAdmin yard�m';
$strPmaUriError = '<tt>$cfg[\'PmaAbsoluteUri\']</tt>\' nin de�eri  konfigurasyon dosyas�n�n i�inde verilmelidir!';
$strPos1 = 'Ba�lang��';
$strPrevious = '�nceki';
$strPrimary = 'Birincil';
$strPrimaryKey = 'Birincil anahtar';
$strPrimaryKeyHasBeenDropped = 'Birincil anahtar silindi';
$strPrimaryKeyName = 'PRIMARY KEY TEK olmal&#305;d&#305;r!';
$strPrimaryKeyWarning = '("PRIMARY" <b>sadece</b> bir anahtar&#305;n ismi <b>olmal&#305;d&#305;r!</b>)';
$strPrintView = 'Yaz�c� g�r�nt�s�';
$strPrivileges = '�ncelikler';
$strProperties = '�zellikler';

$strQBE = ' Sorgula';
$strQBEDel = 'Del';
$strQBEIns = 'Ins';
$strQueryOnDb = 'Veritaban� �zerinde SQL-sorgusu&nbsp;<b>%s</b>:';

$strRecords = 'Kay�tlar';
$strReferentialIntegrity = 'Referans b�t�nl���n� kontrol et.';
$strRelationNotWorking = 'Ba�l� tablolarla �al��mada kullan�lan ekstra �zellikler deaktif edildi...Ni�in oldu�unu ��renmek i�in %sburaya%s t�klay�n�z...';
$strRelationView = '�li�ki g�r�n�m�';
$strReloadFailed = 'MySQL yeniden y�klenmesi ger�ekle�tirilemedi.';
$strReloadMySQL = 'MySQL\'i yeniden y�kle';
$strRememberReload = 'Server\'� yeniden y�klemeyi unutmay�n�z.';
$strRenameTable = 'Tablonun ismini �una de�i�tir';
$strRenameTableOK = '%s tablosu %s olarak yeniden adland�r�ld�';
$strRepairTable = 'Tablo\'yu onar';
$strReplace = 'Yerde�i�tir';
$strReplaceTable = 'Tablo verisini bir dosyadaki ile de�i�tir';
$strReset = 'S�f�rla';
$strReType = 'Yeniden gir';
$strRevoke = 'Ge�ersiz k�l';
$strRevokeGrant = 'Hak ge�ersiz k�l';
$strRevokeGrantMessage = '%s i�in Grant �nceli&#287;ini kald&#305;rd&#305;n&#305;z';
$strRevokeMessage = '%s\'in �nceliklerini kald&#305;rd&#305;n&#305;z';
$strRevokePriv = 'Ayr�cal�klar� ge�ersiz k�l';
$strRowLength = 'Sat�r boyu';
$strRows = 'Sat�r Say�s�';
$strRowsFrom = '(kay�t)ba�layaca�� kay�t :';
$strRowSize = ' Sat�r boyutu ';
$strRowsModeHorizontal= 'yatay';
$strRowsModeOptions= '%s modunda ve %s h�cre sonra ba&#351;l&#305;&#287;&#305; tekrarla';
$strRowsModeVertical= 'dikey';
$strRowsStatistic = 'Sat�r istatisti�i';
$strRunning = ': %s �zerinde �al���yor...';
$strRunQuery = 'Sorguyu �al��t�r';
$strRunSQLQuery = '%s veritaban� �zerinde sorgu/sorgular �al��t�r';

$strSave = 'Kaydet';
$strScaleFactorSmall = '�arpan fakt�r� sayfadaki �ema i�in �ok k���k';
$strSearch = 'Ara';
$strSearchFormTitle = 'Veritaban�nda ara';
$strSearchInTables = 'Tablo(lar) i�inde:';
$strSearchNeedle = 'Aranacak kelime veya de�erler (joker: "%"):';
$strSearchOption1 = 'kelimelerin en az�ndan biri';
$strSearchOption2 = 'b�t�n kelimeler';
$strSearchOption3 = 'tam e�le�im';
$strSearchOption4 = 'normal deyim gibi';
$strSearchResultsFor = ' "%s" %s i�in arama sonu�lar�:';
$strSearchType = 'Bul:';
$strSelect = 'Se�';
$strSelectADb = ' L�tfen bir veritaban&#305; se�iniz';
$strSelectAll = 'T�m�n� se�';
$strSelectFields = 'Alan se� (en az bir):';
$strSelectNumRows = 'sorgu i�erisinde';
$strSelectTables = 'Tablolar� se�';
$strSend = 'Dosya olarak kaydet';
$strServerChoice = 'Server se�imi';
$strServerVersion = 'Server s�r�m�';
$strSetEnumVal = 'E�er alan tipi "enum" veya  "set" ise , l�tfen verileri �u formata g�re giriniz: \'a\',\'b\',\'c\'...<br>E�er bu de�erler aras�na backslash ("\") veya tek t�rnak koyman�z gerekirse ("\'"),bunun i�in backslash kullan�n (mesela \'\\\\xyz\' veya \'a\\\'b\').';
$strShow = 'G�ster:';
$strShowAll = 'T�m�n� g�ster';
$strShowColor = 'Rengi g�ster';
$strShowCols = 'B�t�n s�tunlar� g�ster';
$strShowGrid = 'Izgaray� g�ster';
$strShowingRecords = 'Kay�tlar� g�steriyor';
$strShowPHPInfo = 'PHP bilgisini g�ster';
$strShowTableDimension = 'Tablolar�n boyutlar�n� g�ster';
$strShowTables = 'Tablolar� g�ster';
$strShowThisQuery = ' Bu sorguyu burda yine g�ster ';
$strSingly = '(birer birer)';
$strSize = 'Boyut';
$strSort = 'S�rala';
$strSpaceUsage = 'Kullan�lan alan';
$strSplitWordsWithSpace = 'Kelimeler bir bo�luk karakteriyle b�l�nm��t�r (" ").';
$strSQL = 'SQL';
$strSQLQuery = 'SQL-sorgusu';
$strSQLResult = 'SQL sonucu';
$strStatement = '�fadeler';
$strStrucCSV = 'CSV verisi';
$strStrucData = 'Yap� ve Veri';
$strStrucDrop = '\'Drop table\' ekle';
$strStrucExcelCSV = 'MS Excel verisi i�in CSV';
$strStrucOnly = 'Sadece yap�';
$strStructPropose = 'Tablo yap�s�n� ayarla(mysql,tablo yap�s�n� optimize eder)';
$strStructure = 'Yap�';
$strSubmit = 'Onayla';
$strSuccess = 'SQL sorgunuz ba�ar�yla �al��t�r�lm��t�r';
$strSum = 'toplam';

$strTable = 'Tablo';
$strTableComments = 'Tablo yorumlar�';
$strTableEmpty = 'Tablo ismi bo�!';
$strTableHasBeenDropped = '%s tablosu kald�r�lm��t�r';
$strTableHasBeenEmptied = '%s tablosu bo�alt�lm��t�r';
$strTableHasBeenFlushed = '%s tablosu ba&#351;ar&#305;yla kapat&#305;lm&#305;&#351;t&#305;r.';
$strTableMaintenance = 'Tablo bak�m�';
$strTables = '%s tablo';
$strTableStructure = 'Tablo i�in tablo yap�s�';
$strTableType = 'Tablo tipi';
$strTextAreaLength = 'Boyutu nedeniyle,<br /> bu alan d�zenlenmeyebilir ';
$strTheContent = 'Dosyan�z�n i�eri�i eklendi.';
$strTheContents = 'Dosyan�n i�eri�i tablonun i�eri�ini ayn� birincil veya unique anahtar de�erli s�tunlar i�in yer de�i�tirir..';
$strTheTerminator = 'Alan bitimini belirten i�aret.';
$strTotal = 'toplam';
$strType = 'Tip';

$strUncheckAll = 'Hi�birisini Se�me';
$strUnique = 'Unique';
$strUnselectAll = 'Hi�birisini se�me';
$strUpdatePrivMessage = '%s i�in olan ayr�cal�klar� g�ncellediniz.';
$strUpdateProfile = 'Profil g�ncelle:';
$strUpdateProfileMessage = 'Profil g�ncellendi.';
$strUpdateQuery = 'Sorguyu g�ncelle';
$strUsage = 'Kullan�m';
$strUseBackquotes = 'Tablo ve alan isimleri i�in ters t�rnak " ` " i�aretini kullan';
$strUser = 'Kullan�c�:';
$strUserEmpty = 'Kullan�c� ismi alan� doldurulmad�!';
$strUserName = 'Kullan�c� ismi';
$strUsers = 'Kullan�c�lar';
$strUseTables = 'Tablolar� kullan';

$strValidateSQL = 'SQL\'i do�rula';
$strValue = 'De�er';
$strViewDump = 'Tablo\'nun d�k�m(�ema)\'�n� g�ster';
$strViewDumpDB = 'Veritaban�\'n�n d�k�m(�ema)\'�n� g�ster';

$strWelcome = '%s \'e HO�GELD�N�Z....';
$strWithChecked = 'se�ilileri:';
$strWrongUser = 'Hatal� kullan�c�/parola. Eri�im engellendi.';

$strYes = 'Evet';

$strZip = '"ziplenmi�"';
// To translate

$strBeginCut = 'BEGIN CUT';  //to translate
$strBeginRaw = 'BEGIN RAW';  //to translate

$strEndCut = 'END CUT';  //to translate
$strEndRaw = 'END RAW';  //to translate

$strPdfNoTables = 'No tables';  //to translate

$strSQLParserBugMessage = 'There is a chance that you may have found a bug in the SQL parser. Please examine your query closely, and check that the quotes are correct and not mis-matched. Other possible failure causes may be that you are uploading a file with binary outside of a quoted text area. You can also try your query on the MySQL command line interface. The MySQL server error output below, if there is any, may also help you in diagnosing the problem. If you still have problems or if the parser fails where the command line interface succeeds, please reduce your SQL query input to the single query that causes problems, and submit a bug report with the data chunk in the CUT section below:';  //to translate
$strSQLParserUserError = 'There seems to be an error in your SQL query. The MySQL server error output below, if there is any, may also help you in diagnosing the problem';  //to translate
$strSQPBugInvalidIdentifer = 'Invalid Identifer';  //to translate
$strSQPBugUnclosedQuote = 'Unclosed quote';  //to translate
$strSQPBugUnknownPunctuation = 'Unknown Punctuation String';  //to translate

$strInsecureMySQL = 'Your configuration file contains settings (root with no password) that correspond to the default MySQL privileged account. Your MySQL server is running with this default, is open to intrusion, and you really should fix this security hole.';  //to translate
$strWebServerUploadDirectory = 'web-server upload directory';  //to translate
$strWebServerUploadDirectoryError = 'The directory you set for upload work cannot be reached';  //to translate
$strValidatorError = 'The SQL validator could not be initialized. Please check if you have installed the necessary php extensions as described in the %sdocumentation%s.'; //to translate
$strServer = 'Server %s';  //to translate
$strPutColNames = 'Put fields names at first row';  //to translate
$strImportDocSQL = 'Import docSQL Files';  //to translate
$strDataDict = 'Data Dictionary';  //to translate
$strPrint = 'Print';  //to translate
$strPHP40203 = 'You are using PHP 4.2.3, which has a serious bug with multi-byte strings (mbstring). See PHP bug report 19404. This version of PHP is not recommended for use with phpMyAdmin.';  //to translate
$strCompression = 'Compression'; //to translate
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
