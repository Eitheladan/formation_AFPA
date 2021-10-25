<?php

// on va créer une fonction qui permet de charger un fichier php en donnant simplement son nom


function load_model($class_name){

    $chemin = $class_name.".class.php";

    if (file_exists($chemin)){

        require_once $chemin;
    }
}

spl_autoload_register('load_model');

?>