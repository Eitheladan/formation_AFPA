
<?php
require_once('models/model.php');

function insertPanier($id_produit)
{
    $bddPDO = connexionBDD();
    try {
        $bddPDO->beginTransaction();
    if(!isset($_SESSION['id_commande'])){
        // insertion dans commande
        $sql= $bddPDO->prepare("INSERT INTO commande(date,id_user)VALUES ( NOW(), ? );" );
        $sql->execute(array($_SESSION['id']) );                                 
        
        $lastid = $bddPDO->lastInsertId();
        $_SESSION['id_commande'] = $lastid;
        
    } else{
    }
    try{
        $quantite=$bddPDO->prepare("SELECT quantite FROM produit WHERE id_produit=$id_produit");
        $quantite->execute(array());
        $rqp_qte=$quantite->fetch();
        
        if ($rqp_qte['quantite']>0){    

    // insertion dans contient + si produit exist alors maj quantite.
            $qte=1;
            $sql= $bddPDO->prepare("INSERT INTO contient(id_produit, id_commande , quantite) VALUES ( ?, ?, ? ) ON DUPLICATE KEY UPDATE quantite=quantite+1;" );
            $sql->execute(array($_POST['id_produit'],$_SESSION['id_commande'],$qte) );
                $bddPDO->commit();
            }else{ header('location:javascript://history.go(-1)?message="erreur"');}
        
    }catch (PDOException $e){
        die($e->getMessage("Plus de produit en stock"));
    }
    }catch (PDOException $e){
        $bddPDO->rollBack();
        die($e->getMessage());
    }
    
        
}

function selectPanier()
{
    $bddPDO = connexionBDD();

    $id=$_SESSION['id'];

    $rqp_prod=$bddPDO->prepare("SELECT * FROM produit, commande, contient, tva WHERE commande.id_user = $id AND produit.id_produit = contient.id_produit AND commande.id_commande = contient.id_commande AND produit.id_tva=tva.id_tva");
    $rqp_prod->execute(array());
    $row = $rqp_prod->fetchAll();
    return $row;
}

function supprProduitPanier($id_produit)
{
    $bddPDO = connexionBDD();
    $deletProduit=$bddPDO->prepare("DELETE FROM contient WHERE id_commande = ".$_SESSION['id_commande']." AND id_produit = $id_produit");
    $deletProduit->execute();
}

function validePanier(){

$bddPDO = connexionBDD();

$id=$_SESSION["id"];

$rqe = $bddPDO->prepare("SELECT produit.quantite, contient.id_produit, contient.id_commande, contient.quantite, commande.id_user FROM contient, commande, produit WHERE commande.id_user = $id AND commande.id_commande = contient.id_commande AND produit.id_produit=contient.id_produit");
$rqe->execute(array());

while ($row=$rqe->fetch()){

    $id_client=$row['id_user'];
    $id_commande=$row['id_commande'];
    $id_produit=$row['id_produit'];
    $quantite=$row['quantite'];   

    $sql= $bddPDO->prepare("INSERT INTO `commande_valider`(`id_user`, `id_commande`, `id_produit`, `quantite`) VALUES (?, ?, ?, ?)");
    $sql->execute(array($id_client, $id_commande, $id_produit, $quantite));

    $req= $bddPDO->prepare("UPDATE `produit` SET quantite=quantite-$quantite WHERE id_produit=$row[id_produit];");
    $req->execute(array(
        'quantite'=>$quantite,      
    ));    
}

    $del=$bddPDO->prepare("DELETE FROM contient WHERE $id=$id_client");
    $del->execute();

    session_unset($_SESSION['id_commande']);
    session_destroy($_SESSION['id_commande']);


}






// insertion dans comporter + si produit exist alors maj quantite.

?>