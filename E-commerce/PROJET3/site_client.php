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
        <input type="hidden" name="id_produit" value="<?= $product->id_produit ?>">
        </div>
        <div class="card-body">
        <h4 class="title">Quantité : <input class="prix" type="text" value="1" name="qte"></input></h4>
        <input type="submit" value="Ajouter au panier"  class="btn btn-primary">
        </div>
      </div>
      </form>
        
      <?php endforeach ?>      
    </div>
    <!-- Fin de toutes les cartes -->
  </section>
  <!-- Fin de la section principale -->

  <form action='enregcommande.php' method='post' >
  <input type='text' name='qte'>
  
  <input type="submit" value="Ajouter au panier"  class="btn btn-primary">
  </form>

<?php
include("footer_site_client.php");
?>