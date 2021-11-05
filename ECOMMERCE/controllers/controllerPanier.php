<?php
require_once ('models/modelPanier.php');

function affichePanier()
{   
    $rqp = selectPanier();
    require_once('views/viewPanier.php');
}

function addPanier()
{
    $id_produit=$_POST['id_produit'];
    insertPanier($id_produit);
    header("location:javascript://history.go(-1)");
}

function delProduit()
{
    $id_produit=$_POST['id_produit'];
    supprProduitPanier($id_produit);
    header("location:"._BASE."/controllerPanier/affichePanier");
}

function afficheValidePanier()
{
    validePanier();
    header("location:"._BASE."/controllerPanier/affichePanier");
}
?>