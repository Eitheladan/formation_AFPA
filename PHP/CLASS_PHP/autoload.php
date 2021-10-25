<?php
require_once "fonction_load.php";


// require_once 'contact.class.php' ;
$contact = new Contact ('bob@lol.fr');
var_dump($contact);
// si on a bcp de fichier class à charger ça fera beaucoup d'appels

?>