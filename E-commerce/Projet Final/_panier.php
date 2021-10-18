<?php
session_start();
?>
<?php
$bdd= new PDO ('mysql:host=localhost;dbname=mon_e_commerce','root','');
$bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

if(!isset($_SESSION['id_commande'])){


// insertion dans commande

$sql= $bdd->prepare("INSERT INTO commande(id_client)VALUES ( ? );" );
$sql->execute(array( $_SESSION['id']) );                                 

$lastid = $bdd->lastInsertId();
$_SESSION['id_commande'] = $lastid;

} else{}

// insertion dans comporter + si produit exist alors maj quantite.
$qte=1;
$sql= $bdd->prepare("INSERT INTO comporter(id_produit, id_commande , quantite) VALUES ( ?, ?, ? ) ON DUPLICATE KEY UPDATE quantite=quantite+1;" );
$sql->execute(array($_POST['id_produit'],$_SESSION['id_commande'],$qte) );





header("Location:site_client.php");

?>