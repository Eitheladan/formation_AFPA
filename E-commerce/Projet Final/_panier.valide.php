<?php
session_start();
?>
<?php
$bdd= new PDO ('mysql:host=localhost;dbname=mon_e_commerce','root','');
$bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$id=$_SESSION["id"];

$rqe = $bdd->prepare("SELECT comporter.id_produit, comporter.id_commande, comporter.quantite, commande.id_client FROM comporter, commande WHERE commande.id_client = $id AND commande.id_commande = comporter.id_commande");
$rqe->execute(array());

while ($row=$rqe->fetch()){

    $id_client=$row['id_client'];
    $id_commande=$row['id_commande'];
    $id_produit=$row['id_produit'];
    $quantite=$row['quantite'];

    $sql= $bdd->prepare("INSERT INTO `commande_valider`(`id_client`, `id_commande`, `id_produit`, `quantite`) VALUES (?, ?, ?, ?)");
    $sql->execute(array($id_client, $id_commande, $id_produit, $quantite));
}

$del=$bdd->prepare("DELETE FROM comporter WHERE $id=$id_client");
$del->execute();

header("Location:site_client.php");

