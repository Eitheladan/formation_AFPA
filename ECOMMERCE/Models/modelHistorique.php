<?php
require_once ('Models/model.php');

function selectAllHistoriques(){

    $bddPDO = connexionBDD();
    $req = $bddPDO->prepare("SELECT * FROM commande WHERE commande.id_user = ?");
    $req->execute(array($_SESSION['id']));
    $rqp=$req->fetchAll();
    return $rqp;
}

function selectUneCommande($id_commande){

    $bddPDO = connexionBDD();
    $req = $bddPDO->prepare("SELECT commande.id_commande, produit.id_produit, commande_valider.id_produit, commande_valider.id_commande,
     produit.id_produit, commande_valider.id_commande, produit.id_tva, tva.id_tva, produit.nom, produit.image, produit.prix, commande.date, commande_valider.quantite, tva.taux 
     FROM commande, commande_valider, produit, tva 
    WHERE commande.id_commande = $id_commande AND produit.id_produit = commande_valider.id_produit 
    AND commande_valider.id_commande = $id_commande AND produit.id_tva=tva.id_tva");
    $req->execute(array());
    $rqp=$req->fetchAll();
    return $rqp;

    $bddPDO = connexionBDD();
    
}

?>