
<?php
require '_header.php';
try
{
    $bdd = new PDO("mysql:host=localhost;dbname=mon_e_commerce;charset=UTF8","root","");
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// enregistrement bdd utilisateur

    $id_utilisateur = $_SESSION['id'];
    $ids = array_keys($_SESSION['panier']);

    if(empty($ids)){
        $products=array();
    }else{
        $products = $DB->query('SELECT * FROM produit WHERE id_produit IN ('.implode(',',$ids).')');
        
        foreach($products as $product){            
        $nom = $product->nom;
        $prix = $product->prix_unitaire;
        $qte = $product->id_produit;
        $total = ($product->prix_unitaire)*$_SESSION['panier'][$product->id_produit];
        

            if(!isset($_SESSION['id_commande'])){

            $sql = $bdd->prepare ("INSERT INTO `list_commande` (`id_utilisateur`) VALUES (?);");
            $sql->execute(array($id_utilisateur));

            $id_commande = $bdd->lastInsertId();
            $_SESSION['id_commande'] = $id_commande;

            }else{

            $sql = $bdd->prepare ("INSERT INTO `commande` (`id_commande`,`nom`, qte, `prix`, `total`) VALUES (?, ?, ?, ?, ?);");
            $sql->execute(array($id_commande,$nom,$qte,$prix,$total));

            }
        }
    }


}
catch (PDOException $e)
{echo 'erreur'.$e-> getMessage();
}
header('Location:site_client.php');
?>
