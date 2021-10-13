<?php
require '_header.php';

if(!isset($_SESSION['nom'])){
  header('Location:login.php');
}

if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1800)) {
    // last request was more than 30 minutes ago
    session_unset() ;
    session_destroy();
    header('Location:login.php');
}

$_SESSION['LAST_ACTIVITY'] = time();

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
  <nav>
    <h1>La nature thérapeutique</h1>
    <div class="onglets">
      <p class="link">Nouveautés</p>
      <a href="site_client.php"><p class="link">Produit</p></a>
      <p class="link">Graine</p>
      <p class="link">Bouture</p>
      <p class="link">Cadeaux</p>
      <form>
        <input type="search" placeholder="Rechercher">
      </form>
      
      <p><i class="far fa-heart"></i></p>
      <a href="panier.php"><p><i class="fas fa-shopping-cart"></i></p></a>
    </div>
  </nav>
  <!-- Fin de la barre de navigation -->

  <!-- Box info client + deco -->

  <div class="box-user">    
    <div class="info">
      <p class="name">Bonjour <?= $_SESSION['prenom']." ".$_SESSION['nom']?></p>
      <a href="logout.php"><button class="deco">Déconnexion</button></a>
    </div>  
  </div>
  <!-- fin box info user -->

  <!-- Header -->
   <header>
     <h1>Produits pour un usage médical uniquement<i class="fa-thin fa-face-smile"></i></h1>
     <button>Naviguer <i class="fas fa-paper-plane"></i></button>
   </header>
  <!-- Fin du header -->