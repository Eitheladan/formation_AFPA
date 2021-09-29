<?php

$myfile = fopen("password.txt","a") or die ('problem');

$mdp=$_POST["mdp"];
$email=$_POST["email"];

$hash=password_hash($mdp,PASSWORD_DEFAULT);

// echo($hash);

// if ($verif=password_verify($mdp,$hash)){

//     echo("<br>Tout est ok");
// };






fwrite($myfile,$email.":");
fwrite($myfile,$hash.":\n");

?>