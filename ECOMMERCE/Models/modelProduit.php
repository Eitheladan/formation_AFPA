<?php
require_once('models/model.php');


// Enregictrement du produit
function enregistreProduit($type, $nom, $prix, $quantite, $id_tva)
{
    $bddPDO = connexionBDD();
    $requete = $bddPDO->prepare('INSERT INTO produit(type, nom, prix, quantite, id_tva) 
        VALUES (:type, :nom, :prix, :quantite, :id_tva)');

    
    $requete->bindvalue(':type', $type);
    $requete->bindvalue(':nom', $nom);
    $requete->bindvalue(':prix', $prix);
    $requete->bindvalue(':quantite', $quantite);
    $requete->bindvalue(':id_tva', $id_tva);
   

    $resultAddProduit = $requete->execute();
        
}
//Selection de tous les produits pour affichage
function selectAllProduit()
{
    $bddPDO = connexionBDD();
    $rqp_prod=$bddPDO->prepare("SELECT * FROM produit");
    $rqp_prod->execute(array());
    $case = $rqp_prod->fetchAll();
    return $case;
}

function selectAllProduitsParType($type)
{
    $bddPDO = connexionBDD();
    $rqp_prod=$bddPDO->prepare("SELECT * FROM produit WHERE id_type=:id_type");
    $rqp_prod->execute(array(
        ':id_type'=>$type
    ));
    $case = $rqp_prod->fetchAll();
    return $case;
}
//Selection de tous les parfums pour affichage
function selectAllParfum()
{

    $bddPDO = connexionBDD();

    $rqp_prod=$bddPDO->prepare("SELECT * FROM produit WHERE type='parfum'");
    $rqp_prod->execute(array());
    $case = $rqp_prod->fetchAll();
    return $case;
}
//Selection de tous les Gels Douches pour affichage
function selectAllGelDouche(){

    $bddPDO = connexionBDD();

    $rqp_prod=$bddPDO->prepare("SELECT * FROM produit WHERE type='gel douche'");
    $rqp_prod->execute(array());
    $case = $rqp_prod->fetchAll();
    return $case;
}
//Selection de tous les maquillages pour affichage
function selectAllMaquillage(){

    $bddPDO = connexionBDD();

    $rqp_prod=$bddPDO->prepare("SELECT * FROM produit WHERE type='maquillage'");
    $rqp_prod->execute(array());
    $case = $rqp_prod->fetchAll();
    return $case;
}

//Selection de tous les cours pour affichage

// selection d'un cours pour affichage
function selectUnProduit($id)
{
    $bddPDO = connexionBDD();
    $requete = $bddPDO->prepare('SELECT * FROM produit WHERE id_produit ='.$id);
    $requete->execute();
    $case=$requete->fetchAll();
    return $case;
}

// Modif du cours
function majProduit($id_produit, $type, $nom, $prix, $quantite, $id_tva)
{
    $bddPDO = connexionBDD();
    $requete = $bddPDO->prepare("UPDATE `produit` SET type=:type, nom=:nom, prix=:prix, quantite=:quantite, id_tva=:id_tva WHERE id_produit=:id_produit");
    $requete->execute(array(
        ':type'=>$type,
        ':nom'=>$nom,
        ':prix'=>$prix,
        ':quantite'=>$quantite,
        ':id_tva'=>$id_tva,
        ':id_produit'=>$id_produit
    ));    
}

// suppression d'un Cours
function SupprProduit($id)
{
    $bddPDO = connexionBDD();
    $requete = $bddPDO->prepare("DELETE FROM `produit` WHERE id=".$id);
    $requete->execute();
}

?>