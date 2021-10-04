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
    <script>

        var canvas = document.getElementById("canvas");
        var ctx = canvas.getContext("2d");
        ctx.fillStyle = "green";
        ctx.fillRect(10, 10, 100, 100);

        // remplir la balise entièrement
        // ctx.fillRect(0, 0, canvas.width, canvas.height);
        
    </script>

    <style>

    h1{
        margin-left:40%; 
        border-size: 2px; 
        border-color: white; 
        border-style: solid; 
        width : 400px;
        text-align: center; 
        font-size: 65px;
        text-shadow: 2px 2px 0 #bcbcbc, 4px 4px 0 #9c9c9c;
        color: #000000;
        background-color: #97B8FD ;
        border-radius: 15px 50px;
    }

    .btinsertadresse{
        position: absolute;
        width:200px;
        top: 200px;
        left: 80%;
        font-size: 30px;
    }

    .btdeco{
        position: absolute;
        width:200px;
        top: 15px;
        left: 80%;
        font-size: 30px;
    }

    button{

        width: 150px;
        height: 50px;
        font-size: 20px;
        background:#0252FD;
        color: white;
    }

    .bienvenue{
        font-familly: arial;
        text-align: center;
        font-size: 40px;
        color: black;
        position: absolute;
        top: 300px;
        left: 39%;
        width : 650px;
        padding-top : 5px;
        border-width: 2px; 
        border-style: solid; 
        border-color: black; 
        width: 450px; 
        background-color: RGBA(92,184,80,0.84); 
        border-radius: 15px;      
    }

    .bienvenue span{
        font-weight: bold;
        color: red;
    }

    .admin {

        font-familly: arial;
        text-align: center;
        font-size: 40px;
        color: black;
        position: absolute;
        top: 700px;
        left: 39%;
        width : 650px;
        padding-top : 5px;
        border-width: 2px; 
        border-style: solid; 
        border-color: black; 
        width: 450px; 
        background-color: RGBA(92,184,80,0.84); 
        border-radius: 15px;

    }

    </style>
</head>
<body style="background-image:url('fond.jpg')">

<?php
echo ("<div class='bienvenue'>Bonjour <span>".$_SESSION["prenom"]."<br>".$_SESSION["nom"]."<tr></span></br>
    Bienvenue sur mon site <br> Vous êtes un ".$_SESSION["role"]."<br>Votre numero de téléphone est le ".$_SESSION["tph"]." et votre numéro client est le ".$_SESSION["id"]."</div>");

if(isset($_GET["admin"])){

    echo "<div class='admin'> Merci de bien vouloir passer par la console de gestion pour toutes modifications sur ce site !</div>";

}
?>

<h1>ACCUEIL</h1>

<div class="btdeco"><button  onclick="window.location.href='logout.php'">Déconnection</button></div>

<div class="btinsertadresse"><button  onclick="window.location.href='register_adresse.php'">Nouvelle Adresse</button></div>

<canvas id="canvas"></canvas>
    
</body>
</html>