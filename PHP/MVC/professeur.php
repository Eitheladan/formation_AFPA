<?php

require_once("specialite.class.php");
require_once("professeur.class.php");

$spec1 = new Specialite (1,"POO1","Java");
// $spec2 = new Specialite (1,"POO2","Smalltalk");

$prof1 = new Professeur (1,"MARTIN","Jean","jean@martin.com",$spec1);

// echo "<pre>";
// print_r($prof1);
// echo"</pre>";

$result = $prof1->getNom()." - ".$prof1->getPrenom()." - ".$spec1->getLibelle() ;
echo $result;
?>
