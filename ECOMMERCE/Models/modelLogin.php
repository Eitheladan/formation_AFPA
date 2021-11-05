<?php
require_once ('Models/model.php');

function verifLogin($email) {

$bddPDO = connexionBDD();

$req_verif = $bddPDO->prepare("SELECT * FROM users WHERE mail=?");
$req_verif->execute(array($email));
$row=$req_verif->fetch();
return $row;
}

function logout()
{   
    session_start();
    session_unset() ;
    session_destroy();
}
?>