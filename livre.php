<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

try {

    $bdd = new PDO('mysql:host=127.0.0.1;dbname=restaurant;charset=utf8', 'root', 'pangot');

    /*$restaurant = mysql_connect ('localhost', 'root', 'pangot');
mysql_select_db ('restaurant', $restaurant) ;*/
    $nom =  $_POST['nom'];

 $prenom = $_POST['prenom'];


 $email = $_POST['email'];

 $commentaire = $_POST['commentaire'];



$requete = $bdd->prepare(`INSERT INTO livre(prenom, nom, email, commentaire] VALUES(:prenom,:nom ,:email,:commentaire)`);

$requete->execute(array(
    'prenom' => $prenom,
    'nom' => $nom,
    'email' => $email,
    'commentaire' => $commentaire,
));

}
catch(Exception $e){
 
        die('Erreur : '.$e->getMessage());
        
}

    



?> 