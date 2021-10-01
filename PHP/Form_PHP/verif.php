<?php

$monfichier = fopen("password.txt", "r") or die("pas de fichier tu es mort sale race de mort !!!!!") ;
 

$nom = $_POST ["nom"];
$mdp = $_POST ["mdp"];
$login=$nom.";".$mdp;
    
    $existe=false;

    while(!feof($monfichier)){        

        $maligne =  fgets($monfichier);

        list ($tag,$pw) = explode(":",$maligne,);

        $pw2 = trim($pw,"\n");

        $verif=password_verify($mdp,$pw2);
        
        if ($nom == $tag && $mdp == $verif){

            header('Location:accueil.php');

            exit;            
        }               
    }

    if (!$existe){
        
        header('Location:veriflog.php?message="erreur"'); 

        exit;

    }
?>

