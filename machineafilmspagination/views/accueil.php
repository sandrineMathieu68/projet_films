<!--GESTION DES AFFICHAGES ENTRE HEADER ET FOOTER -->

<div class="container" id="3choix">

		<div class="row">

<!--COMMENT GERER LES REDIRECTIONS A PARTIR DE LA VUE ? -->
			<div class="col s12 m12 l5 xl5 choix">
				<h2><p class="logo1"><span data-icon="&#x45;"></span></p>Choix du film</h2>
				<p>Vous souhaitez trouver toutes les informations concernant un film précis?  Cliquez-ici pour choisir le film qui vous intéresse dans la longue liste des films existants.</p>

<!--VOICI LE CAS : ON LUI INDIQUE LE CHEMIN ABSOLU-->
				<a href="http://localhost/machineafilmspagination/films">
					<!-- 1) NOUS DECOUPONS L'URL COMME SUIT-->
					<!-- 2) SOUS FORME D'ARRAY localhost=[0]/machineafilmspagination=[1]/films=[2] -->
					<!-- 3) MAIS OU EST GERE /films=[2] RETOURNE VOIR DANS index.php où le cas est détaillé avec en uri films-->
					<button class="btn waves-effect waves-light" type="submit" name="submit" value="send">Accéder à la liste des films</button></a>
			</div>
<!--EXACTEMENT LE MÊME PRINCIPE POUR CETTE DIV-->	
			<div class="col s12 m12 l5 xl5 choix" >
				<h2><p class="logo1"><span data-icon="&#x45;"></span></p>Ajouter un film</h2>
				<p>Vous souhaitez enrichir la base de données du site? Rien de plus simple, n'hésitez pas à proposer vos films favoris!Il vous suffit pour cela, de remplir notre formulaire!</p>
				<a href="http://localhost/machineafilmspagination/formview"><button class="btn waves-effect waves-light" type="submit" name="submit" value="send">Soumettre mon film</button></a>
			</div>			
<!--TOUJOURS PAREIL-->	
			<div class="col s12 m12 l5 xl5 choix" >
				<h2><p class="logo1"><span data-icon="&#x45;"></span></p>Inscription</h2>
				<p>Pour aller plus loin et contribuer à l'enrichissement du site, pour faire partie de la communauté de machineafilm.com, vous pouvez vous créer un compte afin d'avoir accès à plein d'autres fonctionnalités.</p>
				<a href="http://localhost/machineafilmspagination/inscription"><button class="btn waves-effect waves-light" type="submit" name="submit" value="send">S'inscrire</button></a>
			</div>
			
<!--TOUT CE GERE DE CETTE MANIERE ET PEU IMPORTE LA VUE APPELLER-->			
	</div>
</div>