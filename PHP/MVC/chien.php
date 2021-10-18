<?php

require_once("chien.class.php");


$chien1 = new Chien ("Zebulon","56"); 
$chien2 = new Chien ("Barnabe","45"); 
$chien3 = new Chien ("Titi","13"); 

$chien1->affiche()."<br><hr>";
$chien2->affiche()."<br><hr>";
$chien3->affiche()."<br><hr>";
