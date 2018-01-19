
<?php
//ON A REMPLACER index.php en ce qu'on veut avec .htacces DONC PLUS BESOIN DE METTRE DANS L'URL index.php

//traiter l'url QUI NOUS A ETE ENVOYE, PASSER EN PARAMETRE
require 'models/models.php';



$url = ''; // ON CREE UNE VARIABLE URL QUI EST = A RIEN POUR L'INSTANT


if(isset($_GET['url'])) {
   /* 
   ON CREE UN ARRAY AVEC L'URL
   array (size=2)
   0 => string 'accueil' (length=7)
   1 => string '3' (length=1)*/

   $url = explode('/',$_GET['url']);//TOUT EST BIEN SEPARER
}



// NOS CONDITIONS ADIN D'AFFICHER DU CONTENU EN FONCTION DE CE QUI EST PASSER DANS L'URL

// 1) Si l'url est vide qu'on est dans le dossier racine (array est vide EMPTY)
if ($url == '') {
	require 'connection.php'; // ON DIRIGE VERS LA PAGE QU'ON VEUT !!!
}elseif ($url[0] == 'home' && !empty($url[1])) {// ATTENTION pas POSSIBLE DE LA NOMMER ACCUEIL
	require 'disponibiliter.php'; // ON DIRIGE VERS LA PAGE QU'ON VEUT !!!
}elseif ($url[0] == 'home' ) {// ATTENTION pas POSSIBLE DE LA NOMMER ACCUEIL
	require 'accueil.php'; // ON DIRIGE VERS LA PAGE QU'ON VEUT !!!
}else{
	require '404.php';
}





?>