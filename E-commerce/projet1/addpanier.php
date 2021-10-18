<!--
// require '_header.php';
// if(isset($_GET['id'])){
//     $product = $DB->query('SELECT id_produit FROM produit WHERE id_produit=:id', array('id'=>$_GET['id']));
    
//     if(empty($product)){
//         die("Ce produit n'existe pas");
//     }
//     $panier->add($product[0]->id_produit);   
//     die('le produit a bien été ajouté à votre panier <a href="site_client.php">retourner sur le catalogue</a>');
// }else{
//     die("Vous n'avez pas sélectionné de produit");
// }

// ?>-->
<?php
<<<<<<< HEAD
session_start();

// ouverture de la bdd

$bdd = new PDO("mysql:host=localhost;dbname=mon_e_commerce;charset=UTF8","root","");

// enregistrement bdd commande

$nom = $_POST['nom'];
$prix = $_POST['prix'];
$id = $_SESSION['id'];
$qte=$_POST['qte'];
$total = ($prix*$qte);

echo($nom);
echo($prix);
echo($id);
echo($qte);
echo($total);


$sql = $bdd->prepare ("INSERT INTO `commande` (`nom`, `qte`, `prix`, `total`, `id_utilisateur`) VALUES (?, ?, ?, ?, ?);");
$sql->execute(array($nom,$qte,$prix,$total,$id));

// header('Location:site_client.php');


=======
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
>>>>>>> 5bd688e4c47b4d768875923067b436545210c106

?>