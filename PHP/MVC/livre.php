<?php

require_once("auteur.class.php");
require_once("livre.class.php");

$livre1 = new Livre ("Les enfants perdu","15 $");

$livre1->addAuteur("Martin","martin@lauteur.fr");
$livre1->addAuteur("Jean","Jean@lauteur.fr");
$livre1->addAuteur("Bob","bob@lauteur.fr");

$livre1->afficheLivre();

echo "<pre>";
print_r($livre1);
echo "</pre>";

?>