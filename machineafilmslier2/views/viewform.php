
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	
	<title>La machine à Films</title>
	<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
	<link rel="stylesheet" href="css/style1.css">
	
	
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
					<a href="../index.php"><p id="logo"><span data-icon="&#xe04e;"></span></p></a>
					<a href="../index.php"> <h1>La Machine à Films</h1></a>
				</div>
			</div>
		</div>
	</header>
	<main>
	
<div class="container">
	<div class="row">
		<form id="myform" action="../controler/formprocess.php" method="POST">
			<div class="col s12 m12 l12 xl12 ">
				<p class="propos">Proposez votre film!<p>
				<p id="marg">Saisissez le titre de votre film, l'année de sa sortie, le nom du ou des réalisateurs et écrivez un bref résumé du film tout en évitant de spoiler les lecteurs </p>
			</div>
			<div class="col s6 m6 l4 xl4 form-group">
				<label for="titre">Titre :</label>
				<input type="text" name="titre" id="titre" />
			</div>
			<div class="col s6 m6 l4 xl4 form-group">
				<label for="annee">Année :</label>
				<input type="number" name="annee" id="annee" />
			</div>
			<div class="col s6 m6 l4 xl4 form-group">
				<label for="realisateur">Réalisateur :</label>
				<input type="text" name="realisateur" id="realisateur" />
			</div>
			<div class="col s12 m12 l12 xl12 form-group">
				<label for="description">Description :</label>
				<textarea name="description" id="description"></textarea>
			</div>
			<!--<select>
				<label for="genre">Genre:</label>
				<option id="Romance">Romance</option>
				<option id="Action">Action</option>
				<option id="Kung-Fu">Kung-Fu</option>
				<option id="Comédie">Comédie</option>
				<option id="Drame">Drame</option>
				<option id="Fantastique">Fantastique</option>
				<option id="Aventure">Aventure</option>
				<option id="Science-Fiction">Science-Fiction</option>
				<option id="Policier">Policier</option>
				<option id="Thriller">Thriller</option>
				<option id="Road-Trip">Road-Trip</option>
				<option id="Feel-Good">Feel-Good</option>
				<option id="Animation">Animation</option>
				<option id="Historique">Historique</option>
			</select>-->
			<div class="col s12 m12 l12 xl12 form-group"> 
				<button class="btn waves-effect waves-light" type="submit" name="submit" value="send">Soumettre</button>
			</div>
		</form>
	</div>
</div>


	

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
	<script type="text/javascript" src="js/materialize.js"></script>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	

</body>
</html>

