 <?php

 //function connexion(){

 	$host = 'localhost';
 	$username = 'root';
 	$password = '';
 	$dbname = 'banque_du_peuple';

 	$dsn = "mysql:host=$host;dbname=$dbname";

 	try{

        $db = new PDO ($dsn,$username,$password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    }catch(EXCEPTION $e){

        die('Erreur: '. $e->getMessage());
        /*echo 'Erreur: '.$e->getMessage().'<br/>';
        echo 'N*: '.$e->getCode();
        die();*/
    }
    //return $db;
 //}   

?>


<!--⇒ Exec() → utiliser pour les requêtes INSERT, UPDATE, DELETE.
Cette méthode renvoie le nombre de lignes modifiés.
⇒ Query() → uiliser pour les requêtes SELECT, SHOW, DESC, EXPLAIN.
Cette méthode renvoie un objet PDOStatement comprenant les résultats de la
requête.-->