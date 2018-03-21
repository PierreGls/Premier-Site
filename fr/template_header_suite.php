<!-- template header la suite 
 car avec l'appel de la fonction renderHeaderToHTML,
 le lien vers la feuille de style était en dehors de la balise 'head' -->
 


	<link href="https://fonts.googleapis.com/css?family=Lora|Ubuntu" rel="stylesheet">		<!-- import de police d'écriture -->
</head>
<body> 
	<header class="intro">
		<h1> Galus Pierre </h1>
		<div class="flag">
		

<?php
function renderHeaderLang($currentPageId,$currentStyle){		
	echo("<a href='index.php?page=");
	echo($currentPageId);									/*Pour que la page change aussi si la langue change */
	echo("&lang=fr");
	echo("&style=");										
	echo($currentStyle);									/*Pour que le style change aussi si la langue change */
	echo("'> <img src='images/drapeaufr.png' alt='Drapeau Français'/> </a>\n");

	

	echo("<a href='index.php?page=");
	echo($currentPageId);
	echo("&lang=en");
	echo("&style=");
	echo($currentStyle);
	echo("'> <img src='images/drapeauen.png' alt='Drapeau Anglais'/> </a>\n");
}
?>
		

