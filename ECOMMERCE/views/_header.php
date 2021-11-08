<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Chogan.fr</title>
    <!-- Favicon-->
    <link rel="shortcut icon" href="<?=_BASE?>/views/image/logo-chogan.ico" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.3.1/css/all.css'>
    <!-- Core theme CSS (includes Bootstrap)-->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css'>
    <!-- CSS du site -->
    <link rel="stylesheet" href="<?=_BASE?>/views/css/css_ecommerce.css">
    
</head>
<header>
<!--début Navigation-->
<nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-between">
    <div class="container-fluid">
    <?php
    // test si le user est connecté
          if (isset($_SESSION['nom'])){
          ?>
      <div class="navbar-brand" href="#">Client</div>
      <?php }else{ ?>
        <div class="navbar-brand" href="#">Visiteur</div>
        <?php } ?>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?=_BASE?>/controllerUser/afficheAccueilClient">Accueil</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Produit
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="<?=_BASE?>/controllerProduit/afficheAllProduitsParType/1">Parfum</a>
              <a class="dropdown-item" href="<?=_BASE?>/controllerProduit/afficheAllProduitsParType/2">Gel Douche</a>
              <a class="dropdown-item" href="<?=_BASE?>/controllerProduit/afficheAllProduitsParType/3">Maquillage</a>
            
         
          </div>
          </li>
          <?php
          // test si le user est connecté pour affichage des liens panier et historique
          if (isset($_SESSION['nom'])){
          ?>
          <li class="nav-item">
          <?php
          // test si le user est connecté pour affichage des liens panier et historique
          if (isset($_SESSION['id_commande'])){
          ?>
            <a class="nav-link active" href="<?=_BASE?>/controllerPanier/affichePanier">Panier</a>
            <?php }else{ ?>
              <a class="nav-link" href="#">Panier</a>
              <?php } ?>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="<?=_BASE?>/controllerHistorique/afficheAllHistoriques">Historique</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="<?=_BASE?>/controllerUser/modifUser/<?=$_SESSION['id']?>">Mon Profil</a>
          </li>
         <?php } ?>
        </ul>
      </div>
    </div>
  
  <div  class="position-absolute top-0 start-50" style="margin-top: 15px; margin-left: -160px;">
    <h4>Bienvenue 
    <?php 
  // test si le user est connecté pour affichage du nom/prenom et le bouton deconnexion
  if (isset($_SESSION['nom']))
  {?>            
    <?php if($_SESSION['genre']=="M"){ ?>  
    Monsieur 
    <?php }else{ ?> Madame 
      <?php } ?><?= $_SESSION['prenom']?> <?= $_SESSION['nom']?></h4>
  </div>
  <div>
   <a class="nav-link" href="<?=_BASE?>/controllerLogin/afficheLogout">
    <button type="button" class="btn btn-info btn-round position-absolute top-0 end-0" style="margin-top: 10px; margin-right: 15px;">Deconnexion</button>
  </a>
  </div>
  <?php }else{
    // sinon affiche le bouton connexion
  ?>
  sur Chogan.fr</h4>
  </div>
  
  
  <div class="container" style="padding-bottom: 0rem;">
  <button type="button" class="btn btn-info btn-round position-absolute top-0 end-0" style="margin-top: 10px; margin-right: 15px;" data-toggle="modal" data-target="#loginModal">
    Connexion
  </button>  
  </div>
  <?php } ?>
<!-- début du popup login -->
  <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header border-bottom-0">
        <button type="button" class="close" data-dismiss="modal" aria-label="fermé">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-title text-center">
          <h4>Bienvenue</h4>
        </div>
        <div class="d-flex flex-column text-center">
          <form action="<?=_BASE?>/controllerLogin/rqpLogin" method="post">
            <div class="form-group">
              <input type="email" class="form-control" name="email" id="email1"placeholder="Adresse Mail...">
            </div>
            <div class="form-group">
              <input type="password" class="form-control" name="mdp" id="password1" placeholder="Mot de Passe...">
            </div>
            <button type="submite" name="envoyer" class="btn btn-info btn-block btn-round">Connexion</button>
          </form>
          
          <div class="text-center text-muted delimiter">Réseaux Sociaux</div>
          <div class="d-flex justify-content-center social-buttons">
            <button type="button" class="btn btn-secondary btn-round" data-toggle="tooltip" data-placement="top" title="Twitter">
              <i class="fab fa-twitter"></i>
            </button>
            <button type="button" class="btn btn-secondary btn-round" data-toggle="tooltip" data-placement="top" title="Facebook">
              <i class="fab fa-facebook"></i>
            </button>
            <button type="button" class="btn btn-secondary btn-round" data-toggle="tooltip" data-placement="top" title="Linkedin">
              <i class="fab fa-linkedin"></i>
            </button>
          </di>
        </div>
      </div>
    </div>
      <div class="modal-footer d-flex justify-content-center">
        <div class="signup-section">Pas encore membre ? <a href="<?=_BASE?>/controllerUser/formAjoutUser" class="text-info"> S'enregistrer</a>.</div>
      </div>
  </div>
</div>
  <!-- fin du popup login -->
</nav>
<!--fin Navigation-->
</header>
<body>
        

        
        