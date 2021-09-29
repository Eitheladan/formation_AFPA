<?php

$myfile = fopen("moulinette.txt","a") or die ('problem');

$mdp=$_POST["mdp"];
$nom=$_POST["nom"];

$hash=password_hash($mdp,PASSWORD_DEFAULT);

fwrite($myfile,$nom.":");
fwrite($myfile,$hash.":");

?>