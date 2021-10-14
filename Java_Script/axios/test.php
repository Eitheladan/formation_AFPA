<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
<?php
$DB = new PDO("mysql:host=localhost;dbname=mon_e_commerce;charset=UTF8","root","");
$products = $DB->query('SELECT * FROM produit');
while ( $row = $products->fetch() ) {
?>
<form class=produit id="<?= $row['id_produit'] ?>">
 <img src=".$row['img'].">
 <input type=text name=name value=".<?=$row['nom']?>" >
 <input type=text name=qte >
 <input type=submit >
</form>
<?php } ?>

<script>
$(".produit").submit(function(event) {
 event.preventDefault();
 var $form = $(this);
 // transforme en texte les données sous la forme
 // cle=valeur&cle=valeur
 var serial = $form.serialize()
 serial = serial + "id_produit" + $(this).attr('id')
// par exemple serial sera égal à la chaine de caractères:
 // "qte=4&id_produit=1"
 // puis post les données texte à un php
 request = $.post({
 url: "jquerypost.php",
 data: serializedData
 }); // fin request
}); // fin submit d’un produit
</script>
</body>
</html> 

