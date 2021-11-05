<?php
function connexionBDD(){
    $host = "localhost";
    $db_name = "ecommerce2";
    $username = "root";
    $password = "";
    
        try{
            $bddPDO = new PDO('mysql:host='.$host.';dbname='.$db_name.';charset=UTF8', $username, $password);
            $bddPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $bddPDO;
        }catch(PDOException $exception){
            echo "Erreur de connexion: ".$exception->getMessage();
        }
}

//
// Fonction de sécurisation des champs provenant d'un formulaire. 
//

function secure_input($data) {
    
    $data = trim($data); // supprime les espaces en début et fin de chaine
    $data = stripslashes($data); // supprime les "/"
    $data = htmlspecialchars($data); // converti les caractères spéciaux en entités html.

    return $data;
}

?>