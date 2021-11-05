<?php include('_headerAdmin.php'); ?>

<div class="list-group">
  <a href="<?=_BASE?>/controllerUser/formAjoutUser" class="list-group-item list-group-item-action">Ajouter nouveau compte</a>
  <a href="<?=_BASE?>/controllerUser/afficheAllUsers" class="list-group-item list-group-item-action">Modifier compte</a>
  <a href="<?=_BASE?>/controllerProduit/afficheAddProduit" class="list-group-item list-group-item-action">Ajouter Nouveau produit</a>
  <a href="<?=_BASE?>/controllerProduit/afficheAllProduit" class="list-group-item list-group-item-action">Modifier produit</a>
</div>

<?php include('_footerAdmin.php'); ?>