<?php

    $monfichier = fopen("password.txt", "r") or die("pas de fichier !!! t mort") ;

    $exist=false;  // variable déclarée à false pour indiqué plus tard si mail existe

    while(!feof($monfichier)) {

        $ligne = fgets($monfichier);  // pour chaque ligne de password.txt
        $sect = explode(":",$ligne);  // je decoupe la ligne par le séparateur : et stock chaque portion dans un tableau $sect. sect[0] correspond au mail et sect[1] correspond au password en clair

        if($sect[0] == $_POST['email'])  // si le mail $sect[0] correspond au mail envoyé dans le $_POST (exemple mich)
        {
            $exist=true ;    // ok le mail existe je passe à true 
            echo "email existe: ". $_POST['email']."<br>";
            $var =  trim($sect[1],"\n");    // je supprime \n , retour chariot qui se trouve dans $sect[1] qui vient du fichier password.txt 
                                            // ( ici $var = $2y$10$HS4nwC1Ol8Lja2Sdd.9lXOkNH2vCu.IkQkQjEbq/IdQ1W2obEdfBm     qui correspond au mdp en clair 111 )

            if ( password_verify(   $_POST['mdp']  , $var )  ) {
                // equivaut à password_verify("111","$2y$10$HS4nwC1Ol8Lja2Sdd.9lXOkNH2vCu.IkQkQjEbq/IdQ1W2obEdfBm")
                echo "mdp correct<br>";
            }
            else {
                echo "mdp incorrect<br>";
            } 
        break;
        }

}
// si existe n'est jamais passé à true l'email est faux
if(!$exist) {echo "Fail email";}

fclose($monfichier);

?>