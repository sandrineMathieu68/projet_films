<?php


$uri = $_SERVER['REQUEST_URI'];

$parts = explode('/', rtrim($uri, '/'));

var_dump($parts[3]);














switch ($parts[3]) {
    case 'accueil':
        echo "accueil";
		include_once('db_config.php');
		include_once('./models/movies.php');
		
		$page = intval($parts[4]);
		
		if(!is_numeric($parts[4])){
			var_dump(getAllMovies($pdo, 0, 5));
		}
		
		elseif ($page = 1){
			var_dump(getAllMovies($pdo, 5, 9));
		}
		
		elseif($page = 2) {
			var_dump(getAllMovies($pdo, 10, 14));
		}
		/*if(is_numeric($parts[4])){
			
		}*/
		
		
        break;
		
    default:
       echo "404 page not found!!!! ";
}



?>
