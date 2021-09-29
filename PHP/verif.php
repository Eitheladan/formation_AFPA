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

            echo ("<div style = 'text-align:center'><h1>Bonjour ".$nom."</h1><br><img src='mdpok.gif'/></div><script>

            let speaknow = new SpeechSynthesisUtterance ('Bonjour Bienvenue sur mon Site')
                        window.speechSynthesis.speak(speaknow);
                        
                        </script>"); $existe=true; break;
        }               
    }

    if (!$existe){
        
        echo ("<div style = 'text-align:center'><h1>Login ou mot de passe faux.</h1><br><img src='mdpfaux.gif'/></div><script>

        let speaknow = new SpeechSynthesisUtterance ('Bonjour le site est réservé à une clientelle prestigieuse ! toi tu es un flan')
                    window.speechSynthesis.speak(speaknow);
                    
                    </script>");
}
?>

