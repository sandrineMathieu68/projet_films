<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Résultat de la requête</title>
		<link rel="stylesheet" href="../style1.css">
	</head>
	<body>
	        <header>
            <div id="logo"><img src="../image/i5.png" width="80" height="80" alt="" id="name"><?php echo "Voici la liste de la selection (avec affichage du choix fait avant), AFFICHAGE DE LA REQUETE AVEC LA BDD"; ?></div><!-- LOGO + MACHINE A FILMS DESIGNER -->
        </header>
	<main>
	<!-- AVEC DESIGN au choix -->
		<div id="tousLesFilms"><!-- AVEC UNE PAGINATION -->
	<!-- tous les films disponible dans la db avec requête -->
	<!-- AVEC DESIGN -->
			<?php echo '<a href="
	./
	">RETOUR A LA SELECTION</a>'; ?>			
	</div>		
	</div>
	<div id="choixParGenre">
            <div id="affichage"><?php
                while ($donnees = $reponse->fetch())
                {
                ?>
                <p id="case">
                    <strong>Titre : </strong><?php echo $donnees['titre']; ?><br />
                    Sortie en : <?php echo $donnees['annee']; ?><br />
                </p>
                <?php
                }
                $reponse->closeCursor(); // Termine le traitement de la requête
                ?>
            </div>
        </ul>		
	</div>

	</main>
<footer>
			<div id="footer">
				<div class="footer"><p id="foo"><img src="../image/i5.png" width="80" height="80" alt="">ANTOINE<img src="../image/i5.png" width="80" height="80" alt="" id="name">YOHANN<img src="../image/i5.png" width="80" height="80" alt="" id="name">SANDRINE</p></div>	
			</div>

	</footer>
	
</body>
</html>