
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	
	<title>La machine à Films</title>
	<link type="text/css" rel="stylesheet" href="views/css/materialize.min.css"  media="screen,projection"/>
	<link rel="stylesheet" href="views/css/style1.css">
	
	
	<meta property="og:title" content="Machine à Film"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="http://localhost:8090/machineafilmslier/"/>
    <meta property="og:description" content="La machine à film vous permet de visualiser les infos d'un film parmi l'ensemble des films existants"/>
    <meta property="og:site_name" content="La machine à Films"/>
    
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:title" content="Machine à Film">
    <meta name="twitter:url" content="http://localhost:8090/machineafilmslier/">
    <meta name="twitter:description" content="La machine à film vous permet de visualiser les infos d'un film parmi l'ensemble des films existants">
    
</head>

<body>
	<header>
		<div class="container">
			<div class="row">
				<div class="col s12 m12 l12 xl12" id="title">
					<p id="logo"><span data-icon="&#xe04e;"></span></p>
					<h1>La Machine à Films</h1>
				</div>
			</div>
		</div>
	</header>
	
	<main >
	<!-- AVEC DESIGN au choix -->

	<?php
		include_once "models/function.php";
		include_once "models/connect.php";
		$uri = $_SERVER['REQUEST_URI'];



		$parts = explode('/', rtrim($uri, '/'));
		var_dump($parts);
		
		include "disponibiliter.php";
		
		
	
	?>



	

<footer>
		<div class="container">
			<div class="row">
				<div class="col s12 m12 l12 xl12" id="footer">
					<p>Réalisation : Sandrine - Antoine - Yohann</p>	
				</div>
			</div>
		</div>
</footer>
	</main>
	<script type="text/javascript" src="views/js/materialize.js"></script>
	<script type="text/javascript" src="views/js/jquery.min.js"></script>
	

</body>
</html>