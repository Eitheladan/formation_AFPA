<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Informatique pour les nuls</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        
    </head>
    <header>
        <!-- Navigation-->
      <nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-between">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Administrateur</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="<?=_BASE?>/controllerUser/afficheAccueilAdmin">Accueil</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Modif
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="<?=_BASE?>/controllerUser/afficheAllUsers">Users</a>
                  <a class="dropdown-item" href="<?=_BASE?>/controllerProduit/afficheAllProduit">Produits</a>       
                </div>
              </li>
            </ul>
              
          </div>
        </div>
        <div>
          <?php 
          if (isset($_SESSION))
          {?>            
          <a class="nav-link" href="<?=_BASE?>/controllerLogin/afficheLogout"><button class="btn btn-outline-success my-2 my-sm-0">Deconnexion</button></a>
          <?php }else{
          ?>
          <a class="nav-link" href="<?=_BASE?>/controllerLogin/afficheLogin"><button class="btn btn-outline-success my-2 my-sm-0">Connexion</button></a>
          <?php } ?>
        </div>
        </nav>
        
    </header>
        <body>
        <div id="particle"></div>
        
        