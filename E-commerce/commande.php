<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>

.bienvenue{

text-align: center;
font-size: 20px;
color: black;
position: absolute;
top: 150px;
left: 36%;
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

    </style>
</head>
<body>

<?php

include("header_client.php");

echo ("<div class='bienvenue'>Bonjour <span>".$_SESSION["prenom"]." ".$_SESSION["nom"]."<tr></span></br>
    Bienvenue sur mon site <br> Vous êtes un ".$_SESSION["role"]."<br>et votre numéro client est le ".$_SESSION["id"]."</div>");

if(isset($_GET["admin"])){

    echo "<div class='admin'> Merci de bien vouloir passer par la console de gestion pour toutes modifications sur ce site !</div>";

}

include("afficher_produit.php");

?>
    
</body>
</html>