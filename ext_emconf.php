<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "realurl".
 *
 * Auto generated | Identifier: 7fd3ab332bfdda199f065e38c4a816f2
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
	'title' => 'RealURL: speaking paths for TYPO3',
	'description' => 'Creates nice looking URLs for TYPO3 pages: converts http://example.com/index.phpid=12345&L=2 to http://example.com/path/to/your/page/. Please, ask for free support in TYPO3 mailing lists or contact the maintainer for paid support.',
	'category' => 'fe',
	'version' => '1.13.6',
	'state' => 'stable',
	'uploadfolder' => true,
	'createDirs' => '',
	'clearcacheonload' => false,
	'author' => 'Dmitry Dulepov',
	'author_email' => 'dmitry.dulepov@gmail.com',
	'author_company' => '',
	'constraints' => 
	array (
		'depends' => 
		array (
			'php' => '5.3.2-5.999.999',
			'typo3' => '4.5.40-7.9.999',
		),
		'conflicts' => 
		array (
			'cooluri' => '',
			'simulatestatic' => '',
		),
		'suggests' => 
		array (
		),
	),
	'_md5_values_when_last_written' => 'a:20:{s:10:"_.htaccess";s:4:"9ab3";s:20:"class.tx_realurl.php";s:4:"2e80";s:29:"class.tx_realurl_advanced.php";s:4:"0671";s:32:"class.tx_realurl_autoconfgen.php";s:4:"57fd";s:28:"class.tx_realurl_tcemain.php";s:4:"37a4";s:16:"ext_autoload.php";s:4:"96ee";s:21:"ext_conf_template.txt";s:4:"c890";s:12:"ext_icon.gif";s:4:"ea80";s:17:"ext_localconf.php";s:4:"80f5";s:14:"ext_tables.php";s:4:"d8df";s:14:"ext_tables.sql";s:4:"150c";s:17:"locallang_csh.xml";s:4:"369d";s:16:"locallang_db.xml";s:4:"584a";s:43:"apiwrappers/class.tx_realurl_apiwrapper.php";s:4:"327e";s:46:"apiwrappers/class.tx_realurl_apiwrapper_4x.php";s:4:"96dd";s:46:"apiwrappers/class.tx_realurl_apiwrapper_6x.php";s:4:"2521";s:14:"doc/manual.sxw";s:4:"04c3";s:38:"modfunc1/class.tx_realurl_modfunc1.php";s:4:"7f10";s:41:"modfunc1/class.tx_realurl_pagebrowser.php";s:4:"d556";s:22:"modfunc1/locallang.xml";s:4:"7e4f";}',
);

?>