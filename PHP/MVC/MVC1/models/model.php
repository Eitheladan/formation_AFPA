<?php

function connexionBDD(){
    $host = "localhost";
    $db_name = "formation";
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

?>