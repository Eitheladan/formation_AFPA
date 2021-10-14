<?php
require '_header.php';
$json = array('error' => true);
if(isset($_GET['id'])){
    $product = $DB->query('SELECT id_produit FROM produit WHERE id_produit=:id', array('id'=>$_GET['id']));
    if(empty($product)){
        $json['message'] = "Ce produit n'existe pas";
    }
    $panier->add($product[0]->id_produit);
    $json["error"] = false;  
    $json["total"] = $panier->total();
    $json["count"] = $panier->count();
    $json['message'] = 'le produit a bien été ajouté à votre panier';
}else{
    $json["message"] = "Vous n'avez pas sélectionné de produit";
}
echo json_encode($json);

?>