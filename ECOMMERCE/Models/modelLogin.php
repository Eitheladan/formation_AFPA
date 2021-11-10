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
{   if(isset($_SESSION['id_commande'])){
    $bddPDO=connexionBDD();
    $id=$_SESSION['id_commande'];
    $del=$bddPDO->prepare("DELETE FROM contient WHERE id_commande=$id");
    $del->execute();
}
    session_start();
    session_unset() ;
    session_destroy();
}
?>