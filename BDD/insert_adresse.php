<?php
session_start();

$bdd = new PDO("mysql:host=localhost;dbname=formation;charset=UTF8","root","");

// $sql = 'SELECT * FROM utilisateur WHERE email= ?';
// $result = $bdd->prepare($sql);
// $result->execute(array($email));
// $row= $result->fetch();

$id_utilisateur=$_SESSION['id'];
$numero = htmlspecialchars($_POST["numero"]);
$voie = htmlspecialchars($_POST["voie"]);
$adresse1 = htmlspecialchars($_POST["adresse1"]);
$adresse2 = htmlspecialchars($_POST["adresse2"]);
$code_post = htmlspecialchars($_POST["code_post"]);
$ville = htmlspecialchars($_POST["ville"]);


$sql2 = $bdd->prepare ("INSERT INTO `adresse` (`id_utilisateur`, `numero`, `voie`, `adresse1`, `adresse2`, `code_post`,`ville`) VALUES (?, ?, ?, ?, ?, ?, ?);") ;
$sql2->execute(array($id_utilisateur,$numero,$voie,$adresse1,$adresse2,$code_post,$ville));



header('Location:accueil.php');

?>