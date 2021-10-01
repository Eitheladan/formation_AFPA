<?php

$bdd = new PDO('mysql:host=localhost;dbname=formation','root','') ;

$login = $_POST ["email"];
$mdp = $_POST ["mdp"];


$sql = "SELECT * FROM utilisateur WHERE email=$login" ;
$req = $bdd->query($sql);
$row = $req->fetch() ;
    echo $row['email']."<br>" ;
    echo $row['nom']."<br>" ;
    echo $row['prenom']."<br>" ;
    echo $row['tph']."<br>" ;
    echo $row['role']."<br>" ;
    echo "<hr>";