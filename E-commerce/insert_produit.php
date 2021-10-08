<?php
session_start();

$bdd = new PDO("mysql:host=localhost;dbname=mon_e_commerce;charset=UTF8","root","");

// $sql = 'SELECT * FROM utilisateur WHERE email= ?';
// $result = $bdd->prepare($sql);
// $result->execute(array($email));
// $row= $result->fetch();

$ref = htmlspecialchars($_POST["ref"]);
$nom = htmlspecialchars($_POST["nom"]);
$prix = htmlspecialchars($_POST["prix"]);

$sql2 = $bdd->prepare ("INSERT INTO `produit` (`ref_produit`, `nom`, `prix_unitaire`) VALUES (?, ?, ?);") ;
$sql2->execute(array($ref,$nom,$prix));

header('Location:register_produit.php');

?>