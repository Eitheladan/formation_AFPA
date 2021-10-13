<?php
include("header_site_client.php");
?>
  <!-- Section principale -->
  <section class="main">
    
    <!-- Toutes les cartes -->
    
    <div class="cards">
      <?php $products = $DB->query('SELECT * FROM produit'); ?>
        <?php foreach ($products as $product): ?>
      <form action="addpanier.php" method="POST">
      <div class="card">
        <img src="image/<?= $product->img ?>">
        <div class="card-header">
        <h4 class="title"><input class="nom" type="text" value="<?= $product->nom ?>" name="nom"></input></h4>
        <h4 class="price"><input class="prix" type="text" value="<?= $product->prix_unitaire ?>" name="prix">€/g</input></h4>
        </div>
        <div class="card-body">
        <h4 class="title">Quantité : <input class="prix" type="text" value="1" name="qte"></input></h4>
        <a class="add" type="submite" href="addpanier.php?id=<?= $product->id_produit; ?>"> <input type="submit" value="Ajouter"></a>
        </div>
      </div>
      </form>
        
      <?php endforeach ?>      
    </div>
    <!-- Fin de toutes les cartes -->
  </section>
  <!-- Fin de la section principale -->

<?php
include("footer_site_client.php");
?>
  
  