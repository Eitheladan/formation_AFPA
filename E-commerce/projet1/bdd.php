<?php

$bdd = new PDO("mysql:host=localhost;dbname=formation","root","");

$sql ="SELECT * FROM utilisateur";
$req = $bdd->query($sql);
while($row = $req->fetch()) {
    echo $row['email']."<br>";
    echo $row['nom']."<br>";
    echo $row['prenom']."<br>";
    echo $row['password']."<br>";
    echo $row['role']."<br>";
    echo $row['tph']."<br>";   
}




?>