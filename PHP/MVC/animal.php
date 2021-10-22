<?php
require_once("animal.class.php");
require_once("felin.class.php");
require_once("hippo.class.php");
require_once("canin.class.php");


$a1 = new Lion ();

$a1->setNom("Lion");
$a1->setImage("lion.jpg");

echo $a1->faitBruit()."<br>";
echo $a1->mange()."<br>";
echo $a1->balade()."<br>";
echo $a1->Dors()."<br><hr>";



$a2 = new Tigre ();

$a2->setNom("Tigre");
$a2->setImage("tigre.jpg");

echo $a2->faitBruit()."<br>";
echo $a2->mange()."<br>";
echo $a2->balade()."<br>";
echo $a2->Dors()."<br><hr>";

$a3 = new Chat ();

$a3->setNom("Chat");
$a3->setImage("chat.jpg");

echo $a3->faitBruit()."<br>";
echo $a3->mange()."<br>";
echo $a3->balade()."<br>";
echo $a3->Dors()."<br><hr>";

$a4 = new Loup ();

$a4->setNom("Loup");
$a4->setImage("loup.jpg");

echo $a4->faitBruit()."<br>";
echo $a4->mange()."<br>";
echo $a4->balade()."<br>";
echo $a4->Dors()."<br><hr>";


$a4 = new Hippo ();

$a4->setNom("Hippopotame");
$a4->setImage("hipopotame.jpg");

echo $a4->faitBruit()."<br>";
echo $a4->mange()."<br>";
echo $a4->Dors()."<br><hr>";




?>