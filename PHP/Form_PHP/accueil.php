<?php
session_start();

 if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1800)) {
    // last request was more than 30 minutes ago
    session_unset() ;
    session_destroy();
    header('Location:veriflog.php');

}

$_SESSION['LAST_ACTIVITY'] = time();

echo strftime("<div class='houre'> %A - %H:%M:%S </div>",time());

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

    </style>
</head>
<body style="background-image:url('fond.jpg')">

<h1>ACCUEIL</h1>

<div class="btdeco"><button  onclick="window.location.href='logout.php'">Déconnection</button></div>

<canvas id="canvas"></canvas>
    
</body>
</html>