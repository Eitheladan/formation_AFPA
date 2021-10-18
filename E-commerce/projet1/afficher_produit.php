
<style>

table{
    
    width: 500px;
    border : 1px solid black;
    background-color: red;
    position: absolute;
    top: 450px;
    left: 39%;
    
}


thead{

    color: blue;
    font-weight : bolder;
    font-size : 15px;
    border : 2px solid black;

}

#qte{

    width : 25px;
}

img {

    width : 75px;
    height : auto; 
}


</style>

<table>
    <thead>
        <tr>
            <td>IMAGE</td>
            <td>REF_PRODUIT</td>
            <td>NOM</td>
            <td>PRIX</td>
            <td>QTE</td>
        </tr>
    </thead>

<?php 

$bdd = new PDO("mysql:host=localhost;dbname=mon_e_commerce;charset=UTF8","root","");

$produit = "SELECT * FROM produit";
$req_produit = $bdd->prepare($produit);
$req_produit->execute(array());
while($case=$req_produit->fetch()){;
$ref=$case['ref_produit'];
$nom=$case['nom'];
$prix=$case['prix_unitaire'];
$img=$case['img'];

$_SESSION['ref_produit']=$ref;
$_SESSION['nom']=$nom;
$_SESSION['prix_unitaire']=$prix;
$_SESSION['img']=$img;

echo ("<form action='pannier.php' method='POST'><tr><td><img src='".$img."'></td><td><input id='text' name='r' readonly='readonly' type='text'value='".$ref."'></input></td>");
echo ("<td><input id='text' type='text' readonly='readonly' name='l' value='".$nom."'></input></td>");
echo ("<td><input id='text' type='prix' readonly='readonly' name='p' value='".$prix."'></input></td><td><input id='qte' type='text' name='q'></input></td><td><input id='input_btn' href='' type='submit' name='action' value='Ajouter'></td></tr></form>");
}
?>
</table>
