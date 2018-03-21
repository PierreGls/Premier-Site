<!-- template menu pour avoir les boutons en anglais -->


	</div>
	</header>
	
	
<?php
function renderMenuToHTML($Selected,$currentLang,$currentStyle) {
	echo("<nav>\n<ul>\n");
// un tableau qui définit la structure du site
	$mymenu = array(
	    'accueil' => array('accueil.php', 'Welcome' ), 
	    'CV' => array('CV.php', 'CV' ), 
		'Projets' => array('Projets.php','Projects'),
	    'Hobbies' => array('Hobbies.php','Hobbies'),
	    'Technologies_Outils' => array('Technologies_Outils.php','Tools'),
	    'Me-contacter' => array('Me-contacter.php','Contact-me'),
		'divers' => array('divers.php','More'),
	);
	
    
	foreach($mymenu as $pageId => $pageParameters) {
	    echo ("<li><a ");
	    if ($pageId===$Selected){
			echo ("class='selected'");
		}
		
		echo("href='index.php?page=");
		
		echo($pageId);
		echo("&lang=");
		echo($currentLang);
		echo("&style=");
		echo($currentStyle);
		echo("'>");
		echo($mymenu[$pageId][1]);
		echo("</a></li>\n");
	}


echo("</ul>\n</nav>\n");
echo("	<div class='page'>\n");
}
?>