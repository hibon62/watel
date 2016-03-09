<?php
//Connexion a la base de données
try{
    $db = new PDO('mysql:host=localhost; dbname=watel', 'root', '');
} catch(PDOException $e){
    die('Erreur : '.$e->getMessage());
}

?>