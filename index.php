<!--Je vous conseille de regarder les pages en français et la feuille de style 1 qui sont très commentées. Les autres le sont moins mais le code est quasi identique-->


<?php

$currentPageId = 'accueil';				/*page par défaut*/
if(isset($_GET['page'])) {
	$currentPageId = $_GET['page'];
}

$currentLang='fr';						/* langue par défaut*/
if(isset($_GET['lang'])) {
	$currentLang = $_GET['lang'];
}

$currentStyle='1';						/*style par défaut*/
if(isset($_GET['style'])) {
	$currentStyle = $_GET['style'];
}


require_once('fr/template_header.php'); 
renderHeaderToHTML($currentStyle);
require_once('fr/template_header_suite.php');
renderHeaderLang($currentPageId,$currentStyle);



/* Le menu comporte des mots, il faut donc s'adapter à la langue*/

if($currentLang=="fr") {									/* Choix du menu en francais */
	require_once('fr/template_menu.php');
	renderMenuToHTML($currentPageId,$currentLang,$currentStyle);
}

if($currentLang=="en") {									/* Choix du menu en anglais */
	require_once('en/template_menu.php');
	renderMenuToHTML($currentPageId,$currentLang,$currentStyle);
}



$pageToInclude = $currentLang . "/" . $currentPageId . ".php";
if(is_readable($pageToInclude))
	require_once($pageToInclude);
else
	require_once("error.php");





require_once('fr/template_footer.php');
?>
