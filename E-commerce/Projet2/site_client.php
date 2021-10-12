<?php
include("header_site_client.php");
?>
  <!-- Section principale -->
  <section class="main">
    
    <!-- Toutes les cartes -->
    
    <div class="cards">
      <?php $products = $DB->query('SELECT * FROM produit'); ?>
        <?php foreach ($products as $product): ?>
      
      <div class="card">
        <img src="image/<?= $product->img ?>">
        <div class="card-header">
          <h4 class="title"><?= $product->nom ?></h4>
          <h4 class="price"><?= number_format($product->prix_unitaire,2,',',' '); ?>€/g</h4>
        </div>
        <div class="card-body">
          <a class="add addPanier" href="addpanier.php?id=<?= $product->id_produit; ?>" <p><i class="fas fa-shopping-cart"></i></p></a>
        </div>
      </div>
      <?php endforeach ?>      
    </div>
    <!-- Fin de toutes les cartes -->
  </section>
  <!-- Fin de la section principale -->

<?php
include("footer_site_client.php");
?>
  
  