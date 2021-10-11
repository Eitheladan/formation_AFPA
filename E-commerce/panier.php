<?php
require 'header_site_client.php';
?>
<table>
    
    <!-- Toutes les cartes -->
    
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
            <td class="title"><?= $product->nom ?></td>
            <td class="price"><?= number_format($product->prix_unitaire,2,',',' '); ?>€</td>
            <td class="qte"><?= $_SESSION['panier'][$product->id_produit]; ?></td>
            <td class="total"><?= number_format(($product->prix_unitaire)*($_SESSION['panier'][$product->id_produit]),2,',',' '); ?>€</td>
            <td><a href="panier.php?del"><i class="fas fa-trash-alt"></i></a></td>
        </tr>
      
      
      <?php endforeach ?>
    </tbody>
      
    
    <!-- Fin de toutes les cartes -->
</table>

<?php

require 'footer_site_client.php';


?>
