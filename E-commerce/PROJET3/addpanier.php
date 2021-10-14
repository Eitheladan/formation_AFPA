<?php
session_start();
?>
<?php
$bdd= new PDO ('mysql:host=localhost;dbname=mon_e_commerce','root','');
$bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$nom = $_POST['nom'];
$prix = $_POST['prix'];
$id = $_SESSION['id'];
$qte=$_POST['qte'];


if(!isset($_SESSION['id_commande'])){


// insertion dans commande


$sql= $bdd->prepare("INSERT INTO list_commande(id_utilisateur)VALUES ( ? );" );
$sql->execute(array( $_SESSION['id']) );

                                 

$lastid = $bdd->lastInsertId();
$_SESSION['id_commande'] = $lastid;

} else{

}
// insertion dans contenu_commande
$sql= $bdd->prepare("INSERT INTO commande(id_produit, id_commande , qte) VALUES ( ?, ?, ? );" );
$sql->execute(array($_POST['id_produit'],$_SESSION['id_commande'],$_POST['qte']) );

header("Location:site_client.php");

?>