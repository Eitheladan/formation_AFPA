<?php

session_start();

$bdd = new PDO("mysql:host=localhost;dbname=mon_e_commerce;charset=UTF8","root","");
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

$ref = htmlspecialchars($_POST["ref"]);
$nom = htmlspecialchars($_POST["nom"]);
$prix = htmlspecialchars($_POST["prix"]);
$img = basename($_FILES["fichier"]["name"]);
$idpro=$_SESSION['id'];

$sql4 = $bdd->prepare("UPDATE `produit` SET `ref_produit`=:ref, nom=:nom, prix_unitaire=:prix, img=:img  WHERE id_produit=:id;");
$sql4->execute(array(

    'ref'=>$ref,
    'nom'=>$nom,
    'prix'=>$prix,
    'img'=>$img,
    'id'=>$idpro,

));

 header('Location:maj_produit.php');

?>