<?php

session_start();

$bdd = new PDO('mysql:host=localhost;dbname=mon_e_commerce;charset=UTF8','root','');

$idpro=$_GET['id'];
$_SESSION['id']=$idpro;

$product = 'SELECT * FROM produit WHERE id_produit=?';

$req_produit = $bdd->prepare($product);
$req_produit->execute(array($idpro));
$case=$req_produit->fetch();
$id=$case['id_produit'];
$nom=$case['nom'];
$ref=$case['ref_produit'];
$prix=$case['prix_unitaire'];
$img=$case['img'];

print_r($nom);
?>
<?php include("header_adm.php"); ?>
<body>
    
<div class="bigbox">
    <h1 class="titre">MODIFICATION PRODUIT</h1>
    <form action="maj_produit_insert.php" method="POST" enctype="multipart/form-data">
        <div class="container2">        
            <div class="form form-control">Ref : <br><input id="input_num" type="text" name="ref" value="<?=$ref?>"></div><br>
            <div class="form form-control">Nom :<br><input type= "text" name="nom" id="" value="<?=$nom?>"></div><br>
            <div class="form form-control">prix_unitaire :<br><input type= "text" name="prix" id="" value="<?=$prix?>"></div><br>
            <input type="file" name="fichier"><br><br> 
            <div class="btn"><br><input class="btn btn-primary" id="input_btn" type="submit" value="Envoyer"><div>
        </div>
    </form>
</div>
</body>

</html>
