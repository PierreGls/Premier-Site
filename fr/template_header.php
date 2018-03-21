<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> 
	<title> SitePro </title>
	
 <?php
function renderHeaderToHTML($currentStyle){								/*lien vers la feuille de style 1 ou 2*/
	echo("<link rel='stylesheet' type='text/css' href='style");			
	echo($currentStyle);
	echo(".css'>");
}
?>