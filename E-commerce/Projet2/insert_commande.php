
<?php
$bdd = new PDO("mysql:host=localhost;dbname=mon_e_commerce;charset=UTF8","root","");

// enregistrement bdd utilisateur

$nom = htmlspecialchars($_POST["l"]);
$ref = htmlspecialchars($_POST["ref"]);
$prix = htmlspecialchars($_POST["p"]);
$qte = htmlspecialchars($_POST["q"]);

$sql = $bdd->prepare ("INSERT INTO `utilisateur` (`ref`, `nom`, `prix`, `qte`, `mdp`) VALUES (?, ?, ?, ?, ?);");
$sql->execute(array($nom,$prenom,$email,$entreprise,$hash));

header('Location:login.php');





?>