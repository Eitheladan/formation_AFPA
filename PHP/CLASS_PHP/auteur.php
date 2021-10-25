<?php

require_once("auteur.class.php");
require_once("livre.class.php");

$auteur1 = new Auteur ("Martin","martin@lauteur.fr");

$auteur1->addLivre("Les enfants perdus","15 $");
$auteur1->addLivre("La route bleu","17.50 $");
$auteur1->addLivre("Jurviminus","10 $");

$auteur1->afficheAuteur();

echo "<pre>";
print_r($auteur1);
echo "</pre>";

?>