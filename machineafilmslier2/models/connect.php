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



$reponse = $pdo->query('SELECT * FROM films');
$donnees = $reponse->fetch();

?>








