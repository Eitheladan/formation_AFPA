<?php
session_start();

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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <style>

    .btinsertadresse{
        position: absolute;
        width:200px;
        top: 200px;
        left: 80%;
    }

    .btdeco{
        position: absolute;
        width:200px;
        top: 8px;
        left: 90%;
        z-index: 10;
        
    }

    button{

        width: 150px;
        height: 50px;
        font-size: 10px;
        background: #e6e6e6;
        color: black;
        border-width: 1px; 
        border-style: solid; 
        border-color: black;

    }

    .bienvenue{

        text-align: center;
        font-size: 20px;
        color: black;
        position: absolute;
        top: 300px;
        left: 39%;
        width : 650px;
        padding-top : 5px;
        border-width: 1px; 
        border-style: solid; 
        border-color: black; 
        width: 600px; 
        background-color: #e3f2fd; 
        border-radius: 15px;      
    }

    .bienvenue span{
        font-weight: bold;
        color: red;
    }

    .admin {

        font-familly: arial;
        text-align: center;
        font-size: 20px;
        color: black;
        margint: auto 0;
        position: absolute;
        top: 500px;
        left: 44%;
        width : 650px;
        padding-top : 5px;
        border-width: 1px; 
        border-style: solid; 
        border-color: black; 
        width: 450px; 
        background-color: #e3f2fd; 
        border-radius: 15px;

    }

    </style>
</head>
<body>


<?php 
    if ($_SESSION['role']=="Admin"){

          include("header_adm.php");

        }else {

            include("header_client.php");
            
        }
?>

<?php
echo ("<div class='bienvenue'>Bonjour <span>".$_SESSION["prenom"]." ".$_SESSION["nom"]."<tr></span></br>
    Bienvenue sur mon site <br> Vous êtes un ".$_SESSION["role"]."<br>et votre numéro client est le ".$_SESSION["id"]."</div>");

if(isset($_GET["admin"])){

    echo "<div class='admin'> Merci de bien vouloir passer par la console de gestion pour toutes modifications sur ce site !</div>";

}
?>



<div class="btdeco"><button  onclick="window.location.href='logout.php'">Déconnexion</button></div>

<!-- <div class="btinsertadresse"><button  onclick="window.location.href='register_adresse.php'">Nouvelle Adresse</button></div> -->

<div class="fluid-video">
    <video autoplay muted loop controls poster="/static/assets/img/poster.jpg" style="width: 1920px; heigth: auto">
        <source src="StarWars.mp4"
                type="video/mp4">
    </video>
</div>

<canvas id="canvas"></canvas>
    
</body>
</html>