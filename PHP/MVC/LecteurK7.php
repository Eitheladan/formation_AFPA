<?php

require_once("k7.class.php");
require_once("lecteurk7.class.php");

$k7 = new K7audio ("ACDC", "BACK IN BLACK",60) ;
$lecteurK7= new Lecteurk7 ($k7) ;

$reward=$k7->getDurée()-10;
$forward=$reward+10;

echo ($k7->getNom_groupe()." - ".$k7->getTitre_album()." - ".($k7->getDurée())."mn : ".$lecteurK7->Play()." temps restant = ".$k7->getDurée()."mn<br><hr>");
echo ($k7->getNom_groupe()." - ".$k7->getTitre_album()." - ".($k7->getDurée())."mn : ".$lecteurK7->Stop()." temps restant = ".($k7->getDurée()-60)."mn<br><hr>");
echo ($k7->getNom_groupe()." - ".$k7->getTitre_album()." - ".($k7->getDurée())."mn : ".$lecteurK7->Forward()." temps restant = ".$reward."mn<br><hr>");
echo ($k7->getNom_groupe()." - ".$k7->getTitre_album()." - ".($k7->getDurée())."mn : ".$lecteurK7->Reward()." temps restant = ".$forward."mn<br><hr>");
echo ($k7->getNom_groupe()." - ".$k7->getTitre_album()." - ".($k7->getDurée())."mn : ".$lecteurK7->Eject()."<br>");

?>