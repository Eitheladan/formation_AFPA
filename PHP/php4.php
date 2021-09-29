<?php


$cookie_name = "user";
$cookie_valeur = "Jhon Smith";


setcookie($cookie_name,$cookie_valeur,time()+3600);

echo $_COOKIE['user']

?>