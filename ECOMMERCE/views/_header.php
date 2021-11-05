<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Les Senteurs Du Désire</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.3.1/css/all.css'>
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css'>
        <!-- Core theme CSS (includes Bootstrap)-->

<style>
  .container {
  padding: 2rem 0rem;
  }

@media (min-width: 576px) {
  .modal-dialog {
    max-width: 400px;
  }
  .modal-dialog .modal-content {
    padding: 1rem;
  }
}
  .modal-header .close {
  margin-top: -1.5rem;
  }

  .form-title {
  margin: -2rem 0rem 2rem;
  }

  .btn-round {
  border-radius: 3rem;
  }

  .delimiter {
  padding: 1rem;
  }

  .social-buttons .btn {
  margin: 0 0.5rem 1rem;
  }

  .signup-section {
  padding: 0.3rem 0rem;
  }
</style>
        
</head>
<body>
        <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-between">
    <div class="container-fluid">
    <?php
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
              <a class="dropdown-item" href="<?=_BASE?>/controllerProduit/afficheAllParfums">Parfum</a>
              <a class="dropdown-item" href="<?=_BASE?>/controllerProduit/afficheAllGelDouche">Gel Douche</a>
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdowntMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Maquillage</a>
          <div class="dropright">
          <div class="dropright dropdown-menu">
          <a class="dropdown-item" href="<?=_BASE?>/controllerProduit/afficheAllParfums">Rouge à lèvre</a>
          <a class="dropdown-item" href="<?=_BASE?>/controllerProduit/afficheAllGelDouche">Phare à paupière</a>
          </div>
          </div>
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdowntMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Maquillage</a>
          <div class="dropright">
          <div class="dropright dropdown-menu">
          <a class="dropdown-item" href="<?=_BASE?>/controllerProduit/afficheAllParfums">Rouge à lèvre</a>
          <a class="dropdown-item" href="<?=_BASE?>/controllerProduit/afficheAllGelDouche">Phare à paupière</a>
          </div>
          </div>
          </li>
          <?php
          if (isset($_SESSION['nom'])){
          ?>
          <li class="nav-item">
            <a class="nav-link" href="<?=_BASE?>/controllerPanier/affichePanier">Panier</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?=_BASE?>/controllerInscription/affichePlaningEtudiants">Historique</a>
          </li>
         <?php } ?>
        </ul>
      </div>
    </div>
  <?php 
  if (isset($_SESSION['nom']))
  {?>            
  <div  class="position-absolute top-0 start-50" style="margin-top: 15px; margin-left: -150px;"> 
    <h4>Bienvenue <?= $_SESSION['prenom']?> <?= $_SESSION['nom']?></h4>
  </div>
  <div>
   <a class="nav-link" href="<?=_BASE?>/controllerLogin/afficheLogout">
    <button type="button" class="btn btn-info btn-round position-absolute top-0 end-0" style="margin-top: 15px; margin-right: 15px;">Deconnexion</button>
  </a>
  </div>
  <?php }else{
  ?>
  <div class="container">
  <button type="button" class="btn btn-info btn-round position-absolute top-0 end-0" style="margin-top: 15px; margin-right: 15px;" data-toggle="modal" data-target="#loginModal">
    Connexion
  </button>  
  </div>
  <?php } ?>
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
        <div class="signup-section">Pas encore membre ? <a href="#a" class="text-info"> S'enregistrer</a>.</div>
      </div>
  </div>
</div>
  
</nav>
<div id="particle"></div>
        
        