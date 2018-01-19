<?php
   // ICI NOUS METTONS LES DIFFERENTES FONCTIONS // ACTION 
   // L'AFFICHAGE SOUHAITE
$servername = "localhost";
$username = "root";
$password = "";

try {
$pdo = new PDO("mysql:host=$servername;dbname=films", $username, $password,array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
// set the PDO error mode to exception
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//echo "CONNECTER";
}
catch(PDOException $e)
{
echo "Connection failed: " . $e->getMessage();
}


if(isset($_GET['pp']) && !empty($_GET['pp']) && ctype_digit($_GET['pp']) == 1){
	$perPage = $_GET['pp'];
}else{
	$perPage = 5;
}


$req = $pdo->query('SELECT COUNT(*) AS total FROM films');
$result = $req->fetch();
$total = $result['total'];

$nbPage = ceil($total/$perPage); // pour arrondir au nombre de page supérieur

//pour savoir sur quel page on se trouve
if(isset($_GET['p']) && !empty($_GET['p']) && ctype_digit($_GET['p']) == 1) // Si la variable $_GET[''] existe...
{
  
 
     if($_GET['p']>$nbPage) // Si la valeur de $pageActuelle (le numéro de la page) est plus grande que $nombreDePages...
     {
          $current = $nbPage;
     }else{
     	  $current = $_GET['p'];
     }
}
else // Sinon
{
     $current = 1; // La page actuelle est la n°1    
}
$firstOfPage = ($current-1)*$perPage;

$reqProducts = $pdo->query("SELECT * FROM films ORDER by id ASC LIMIT $firstOfPage,$perPage");