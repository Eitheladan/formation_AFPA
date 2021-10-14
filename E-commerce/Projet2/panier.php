<?php require 'header_site_client.php'; ?>

<table>
  <form action='insert_commande.php' methode='POST'>
    
    
    
    <thead>
      <tr>
        <td class="icone"></td>
        <td class="title">Article</td>
        <td class="price">Prix Unitaire</td>
        <td class="qte">Quantité</td>
        <td class="total">Total HT</td>
      </tr>
    </thead>
    <tbody>
       
        <?php
        print_r(array_keys($_SESSION['panier']));
        $ids = array_keys($_SESSION['panier']);
        
        if(empty($ids)){
            $products=array();
        }else{
        $products = $DB->query('SELECT * FROM produit WHERE id_produit IN ('.implode(',',$ids).')');
        }
        foreach($products as $product):        
        ?>

        <tr class='rowPanier'>
            <td class="icone"><img src="image/<?= $product->img ?>" width="75px"></td>
            <td class="nom"><input name = 'nom<?= $product->id_produit ?>' type='texte' readonly disabled value='<?= $product->nom ?>'></td>
            <td class="prix"><input name = 'prix_unitaire<?= $product->id_produit ?>' type='texte' readonly disabled value='<?= number_format($product->prix_unitaire,2,',',' '); ?>€'></td>
            <td class="qte"><input name = 'qte<?= $product->id_produit ?>' type='texte' readonly disabled value='<?= $_SESSION['panier'][$product->id_produit]; ?>'></td>
            <td class="total"><input name = 'stotal<?= $product->id_produit ?>' type='texte' readonly disabled value='<?= number_format(($product->prix_unitaire)*($_SESSION['panier'][$product->id_produit]),2,',',' '); ?>€'></td>
            <td><a href="panier.php?delPanier=<?= $product->id_produit ?>"><i class="fas fa-trash-alt"></i></a></td>
        </tr>
        
      <?php endforeach ?>
      <tr><td>Total : <input name ='total' type='texte' readonly disabled value='<?= number_format($panier->total(),2,',',' '); ?>€'></td><td><a href="insert_commande.php">Valider panier</a></td></tr>

    </tbody>
      
    
    
  </form>
</table>





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
 url: "insert_commande.php",
 data: serializedData
 }); // fin request
}); // fin submit d’un produit
</script>


<?php require 'footer_site_client.php'; ?>
