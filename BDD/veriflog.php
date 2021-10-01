<?php

$bdd = new PDO('mysql:host=localhost;dbname=formation','root','') ;

$log = $_POST ["email"];
$mdp = $_POST ["mdp"];

$sql = "SELECT * FROM utilisateur WHERE email='email@gmail.fr'" ;
$req = $bdd->query($sql);
$row = $req->fetch() ;

?>