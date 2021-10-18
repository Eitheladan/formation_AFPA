<?php

session_start();

$bdd = new PDO("mysql:host=localhost;dbname=mon_e_commerce;charset=UTF8","root","");
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

$ref = htmlspecialchars($_POST["ref"]);
$nom = htmlspecialchars($_POST["nom"]);
$prix = htmlspecialchars($_POST["prix"]);
$img = basename($_FILES["fichier"]["name"]);


$sql2 = $bdd->prepare ("INSERT INTO `produit` (`ref_produit`, `nom`, `prix_unitaire`, `img`) VALUES (?, ?, ?, ?);");
$sql2->execute(array($ref,$nom,$prix,$img));

print_r($_FILES["fichier"]);

// header('Location:register_produit.php');

?>