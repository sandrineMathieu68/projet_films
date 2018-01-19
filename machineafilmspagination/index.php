<?php
// url est découpé en uri comme un tableau chaque slash correspond un l'indexation du tableau
$uri = $_SERVER['REQUEST_URI'];
$parts = explode('/', rtrim($uri, '/'));

if ($parts[1] == "machineafilmspagination") { // FICHIER DE DEPART [1]
	
	switch ($parts[2]) { // Arès le slash dans la case 2 [2]

		// SI LA CASE [2] EST VIDE AFFICHE MOI header avec l'url saissie

		case "" : // DANS LA CASE VIDE RENDS TOI A CETTE uri accueil qui est défini ensuite
			header('Location: http://localhost/machineafilmspagination/accueil');
			break; // ET STOP JUSQU'A LA PROCHAINE ACTION

		case "accueil" : // dans la case 2 MET DANS URI ACCUEIL !!!


// MAIS DE QUOI EST-ELLE COMPOSEE ?

			include_once "./models/movies.php"; // ON INCLUS LES FONCTIONS POUR INTER-AGIR DYNAMIQUEMENT
			
			// bien mettre les affichages dans l'ordre !!! connexion/header/la vue souhaitée/footer
			include_once "db_config.php"; // 		1) DE LA CONNEXION A LA BASE DE DONNEES
			
			include_once "views/accueil.php";//		3) LA VUE SOUHAITEE ici accueil.php qui est composée : ALLER REGARDER LE FICHIER
			include_once "views/footer.php";// 		4) DU PIED DE PAGE
			break;

		case "films" : // LA CASE [2] S'APPELLE BIEN FILMS ET FAIT APPEL AVEC LA CONDITION à [3] pour affichage de tous les films

			if (!isset($parts[3])){
				header('Location: http://localhost/machineafilmspagination/films/1');
			}

			include_once "db_config.php";
			include_once "./models/movies.php";

			include_once "views/header.php";
			include_once "views/films.php";
			include_once "views/footer.php";
			break;
			

		case "formview" :

			include_once "db_config.php";
			include_once "./models/movies.php";

			include_once "views/header.php";
			include_once "views/viewform.php";
			include_once "views/footer.php";
			break;
			
		case "inscription" :

			include_once "db_config.php";
			include_once "./models/movies.php";

			include_once "views/header.php";
			include_once "views/connectform.php";
			include_once "views/footer.php";
			break;

		case "film" :

			if(isset($parts[3])){

				if(is_numeric($parts[3])){

					$id = $parts[3];

					include_once "db_config.php";
					include_once "models/movies.php";

					$film = getMovieById($pdo, $id);
					
					include_once "views/header.php";
					include_once "views/film.php";

					include_once "views/footer.php";

				}
				
		
		  }else{
			
			include_once "views/header.php";
			include_once "views/404.php";
			include_once "views/footer.php";
		  }

	  break;
			
			
	}
}

else{ // sinon ENVOI UNE PAGE D'ERREUR AVEC TOUT CE QU'elle NECESSITE DANS CE CAS header/le vue/footer
	include_once "views/header.php";
	include_once "views/404.php";
	include_once "views/footer.php";
}













































/*



$url = ''; // ON CREE UNE VARIABLE URL QUI EST = A RIEN POUR L'INSTANT


if(isset($_GET['url'])) {
   
   ON CREE UN ARRAY AVEC L'URL
   array (size=2)
   0 => string 'accueil' (length=7)
   1 => string '3' (length=1)

   $url = explode('/',$_GET['url']);//TOUT EST BIEN SEPARER
}



//ON A REMPLACER index.php en ce qu'on veut avec .htacces DONC PLUS BESOIN DE METTRE DANS L'URL index.php

//traiter l'url QUI NOUS A ETE ENVOYE, PASSER EN PARAMETRE
require 'models/connect.php';
require 'models/model.php';

// NOS CONDITIONS ADIN D'AFFICHER DU CONTENU EN FONCTION DE CE QUI EST PASSER DANS L'URL

// 1) Si l'url est vide qu'on est dans le dossier racine (array est vide EMPTY)
if ($url == '') {
	require 'accueil.php'; // ON DIRIGE VERS LA PAGE QU'ON VEUT !!!
}elseif ($url[0] == 'home' && !empty($url[1]) && $url[1] == 'description' && !empty($url[2])){
	
	$uri = $_SERVER['REQUEST_URI'];
	$parts = explode('/', rtrim($uri, '/'));
	$bdd = new PDO('mysql:host=localhost;dbname=films;charset=utf8', 'root', '');
	$film = $bdd->query('select * from films order by id ');
	
	détails($parts, $film);
}
elseif ($url[0] == 'home' && !empty($url[1])) {// ATTENTION pas POSSIBLE DE LA NOMMER ACCUEIL
	require 'disponibiliter.php'; // ON DIRIGE VERS LA PAGE QU'ON VEUT !!!
}elseif ($url[0] == 'home' ) {// ATTENTION pas POSSIBLE DE LA NOMMER ACCUEIL
	require 'selection.php'; // ON DIRIGE VERS LA PAGE QU'ON VEUT !!!
}
else{
	require '404.php';
}



*/


?>