<?php
require_once ('models/modelProduit.php');


function afficheAddProduit(){

    require_once('views/viewFormAddProduit.php');
}

function ajouterUnProduit(){
    $type = secure_input($_POST['type']); 
    $nom = $_POST['nom'];
    $prix = $_POST['prix'];
    $quantite = $_POST['quantite'];
    $id_tva = $_POST['id_tva'];

    // var_dump($type);

    enregistreProduit($type, $nom, $prix, $quantite, $id_tva);

    header('location:'._BASE.'/controllerProduit/afficheAddProduit');
}

function afficheAllProduit(){
    $rqp = selectAllProduit();
    require_once('views/viewProduits.php');
}

function afficheAllParfums(){
    $rqp = selectAllParfum();
    require_once('views/viewProduitParfum.php');
}

function afficheAllGelDouche(){
    $rqp = selectAllGelDouche();
    require_once('views/viewProduitGelDouche.php');
}

function afficheAllMaquillage(){
    $rqp = selectAllMaquillage();
    require_once('views/viewProduitMaquillage.php');
}
function afficheModifProduit($id){
    $rqp = selectUnProduit($id);
    require_once('views/viewFormModifProduit.php');
}

function afficheAllProduitsParType($type){
    $rqp = selectAllProduitsParType($type);
    require_once('views/viewAllproduitsParType.php');
}

function rqpMajProduit($id_produit)
{
    $type = $_POST['type']; 
    $nom = $_POST['nom'];
    $prix = $_POST['prix'];
    $quantite = $_POST['quantite'];
    $id_tva = $_POST['id_tva'];

    majProduit($id_produit, $type, $nom, $prix, $quantite, $id_tva);
    header('location:'._BASE.'/controllerProduit/afficheAllProduit');
}
?>