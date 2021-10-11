<?php
require '_header.php';
if(isset($_GET['id'])){
    $product = $DB->query('SELECT id_produit FROM produit WHERE id_produit=:id', array('id'=>$_GET['id']));
    echo($_GET['id']);
    if(empty($product)){
        die("Ce produit n'existe pas");
    }
    $panier->add($product[0]->id_produit);   
    die('le produit a bien été ajouté à votre panier <a href="site_client.php">retourner sur le catalogue</a>');
}else{
    die("Vous n'avez pas sélectionné de produit");
}

?>