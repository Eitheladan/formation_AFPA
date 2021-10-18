<?php

// ouverture de la bdd

$bdd = new PDO("mysql:host=localhost;dbname=mon_e_commerce;charset=UTF8","root","");
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

// enregistrement bdd utilisateur

$password = htmlspecialchars($_POST["mdp"]);
$hash = password_hash($password,PASSWORD_DEFAULT);
$nom = htmlspecialchars($_POST["nom"]);
$prenom = htmlspecialchars($_POST["prenom"]);
$email = htmlspecialchars($_POST["email"]);
$entreprise = htmlspecialchars($_POST["entreprise"]);

$sql = $bdd->prepare ("INSERT INTO `utilisateur` (`nom`, `prenom`, `email`, `entreprise`, `mdp`) VALUES (?, ?, ?, ?, ?);");
$sql->execute(array($nom,$prenom,$email,$entreprise,$hash));

header('Location:../login.php');



?>