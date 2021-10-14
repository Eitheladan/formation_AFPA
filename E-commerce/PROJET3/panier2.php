<?php
require 'header_site_client.php';
?>
<table class="main">
    
    <!-- Toutes les cartes -->
    
    <header class="cards">
        <td class="icone"></td>
        <td class="title">Article</td>
        <td class="price">Prix Unitaire</td>
        <td class="qte">Quantité</td>
        <td class="total">Total HT</td>
    </header>
       
        <?php
        $ids = array_keys($_SESSION['panier']);
        if(empty($ids)){
            $products=array();
        }else{
        $products = $DB->query('SELECT * FROM produit WHERE id_produit IN ('.implode(',',$ids).')');        
        }
        foreach($products as $product):
        
        ?>

        <tr class="card">
            <td class="icone"><img src="image/<?= $product->img ?>" width="75px"></td>
            <td class="title"><?= $product->nom ?></td>
            <td class="price"><?= number_format($product->prix_unitaire,2,',',' '); ?>€</td>
            <td class="qte"><?= $_SESSION['panier'][$product->id_produit]; ?></td>
            <td class="total"><?= ($product->prix_unitaire)*($_SESSION['panier'][$product->id_produit]); ?>€</td>
        </tr>
      
      <
      <?php endforeach ?>
      
    <
    <!-- Fin de toutes les cartes -->
</table>
<?php
require 'footer_site_client.php';
?>