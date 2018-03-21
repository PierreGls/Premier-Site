	</div>
	</header>
	
<?php
function renderMenuToHTML($Selected,$currentLang,$currentStyle) {						// création du menu 
	echo("<nav>\n<ul>\n");
// un tableau qui définit la structure du site
	$mymenu = array(
	    'accueil' => array('accueil.php', 'Accueil' ), 
	    'CV' => array('CV.php', 'CV' ), 
		'Projets' => array('Projets.php','Projets'),
	    'Hobbies' => array('Hobbies.php','Hobbies'),
	    'Technologies_Outils' => array('Technologies_Outils.php','Outils'),
	    'Me-contacter' => array('Me-contacter.php','Me Contacter'),
		'divers' => array('divers.php','Divers'),
	);
	
    
	foreach($mymenu as $pageId => $pageParameters) {
	    echo ("<li><a ");
	    if ($pageId===$Selected){
			echo ("class='selected'");													//pour un style différent de la page ouverte
		}
		echo("href='index.php?page=");													
		echo($pageId);																	//lien vers la page correspondante
		echo("&lang=");
		echo($currentLang);																//sans changer la langue
		echo("&style=");
		echo($currentStyle);															//ni le style
		echo("'>");
		echo($mymenu[$pageId][1]);														//Mot qui apparaitra sur le bouton
		echo("</a></li>\n");
	}


echo("</ul>\n</nav>\n");
echo("	<div class='page'>");
}
?>










	
	
