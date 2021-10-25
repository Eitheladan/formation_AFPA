<?php

require_once("specialite.class.php");
require_once("professeur2.class.php");

$prof1 = new Professeur (1,"MARTIN","Jean","jean@martin.com");

$prof1->addSpecialite(1,"POO1","Java");
$prof1->addSpecialite(2,"POO2","Smalltalk");
$prof1->addSpecialite(3,"POO3","Simula67");


$prof1->afficheSpecialite();


echo "<pre>";
print_r($prof1);
echo"</pre>";



// $result = $prof1->getNom()." - ".$prof1->getPrenom()." - ".$spec1->getLibelle() ;
// echo $result;
?>