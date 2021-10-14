<?php
require '_header.php';

 if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1800)) {
    // last request was more than 30 minutes ago
    session_unset() ;
    session_destroy();
    header('Location:login.php');

}

$_SESSION['LAST_ACTIVITY'] = time();

// echo strftime("<div class='houre'> %A - %H:%M:%S </div>",time());

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Les produits naturels</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/javascript.js@0.0.0/lib/index.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.css">
</head>

<body>
  <!-- Barre de navigation -->
  <nav class="navbar navbar-light fixed-top" id="navbar" style="background-color: #e3f2fd;">
        <div class="container-fluid">
          <a class="navbar-brand position-absolute start-50" href="#"><p class="name">Bonjour <?= $_SESSION['prenom']." ".$_SESSION['nom']?></p></a>
          <div class="navbar-brand position-absolute" style="right: 0"><div>Total Panier : <span id='total'><?= number_format($panier->total(),2,',',' '); ?></span> €</div> <div>Total Article : <span id='count'><?= $panier->count(); ?></span></div><a class="navbar-brand position-absolute end-0" id="idpanier" href="panier.php">Panier <i class="fas fa-shopping-cart"></i></a></div>
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
              <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="site_client.php">Accueil</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="register_produit.php">Parfum</a>
                </li>
                
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Maquillage
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
                    <li><a class="dropdown-item" href="#">Rouge à lèvre</a></li>
                    <li><a class="dropdown-item" href="#">Crayon</a></li>
                    <li>
                      <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                  </ul>
                  <li class="nav-item">
                  <a class="nav-link" href="panier.php">Panier <i class="fas fa-shopping-cart"></i></a>
                  </li>
                  <li class="nav-item">
                  <a class="nav-link" href="logout.php">Déconnexion <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-square-fill" viewBox="0 0 16 16">
  <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 1 1 .708-.708z"/>
</svg> </a>
                </li>
                </li>
              </ul>
              
            </div>
          </div>
        </div>
      </nav>
  <!-- fin barre de navigation -->