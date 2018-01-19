<?php

	


	function getAllMovies($pdo, $x, $y){
		
		$stmt = $pdo->prepare("SELECT * FROM films LIMIT $x,$y"); 
    	$stmt->execute();
		
		
		
		while ($donnees = $stmt->fetch())
		{
		?>
    	
    	<p><strong>Titre</strong> : <?php echo $donnees['titre'];?><br/>
    	<strong>Année</strong> : <?php echo $donnees['annee'];?><br/>
    	<strong>Description</strong> : <?php echo $donnees['description'];?><br/>
    	<strong>Realisateur</strong> : <?php echo $donnees['realisateur'];?><br/>
    	<strong>Id</strong> : <?php echo $donnees['id'];?><br/>
		</p><?php
		
		}
    	
    // set the resulting array to associative
    	return $stmt->fetchAll(); 
		
	}


	function getMovie($pdo, $id){
		
		$stmt = $pdo->prepare("SELECT * FROM table1 WHERE id=:id");
		$stmt->bindParam(':id', $id);
    	$stmt->execute();
		
		echo $stmt;
		
		$donnees = $stmt->fetch();
		
		echo $donnees;
		?>
    	
    	<p><strong>Titre</strong> : <?php echo $donnees['titre'];?><br/>
    	<strong>Année</strong> : <?php echo $donnees['annee'];?><br/>
    	<strong>Description</strong> : <?php echo $donnees['description'];?><br/>
    	<strong>Realisateur</strong> : <?php echo $donnees['realisateur'];?><br/>
		</p><?php

    // set the resulting array to associative
    	return $stmt->fetchAll(); 
		
		
	}



?>