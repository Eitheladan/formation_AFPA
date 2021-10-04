<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>

        .bigbox{

            background-color: rgba(255, 255, 255, .5);
            width : 600px;
            height : 300px;
            margin: 20% auto 0% auto;
            text-align: center;
        }

        .bigbox h1{

            padding-top: 10px;
            font-family: arial;
        }

        .container{

            text-align : center;
            position : absolute;
            top: 44%;
            left: 38%;
            padding-top : 5px;
            border-width: 2px; 
            border-style: solid; 
            border-color: black; 
            width: 450px; 
            background-color: RGBA(92,184,80,0.84); 
            border-radius: 15px;
        }

        .form{
            color : black; 
            font-size: 25px; 
            font-weight: bold; 
            font-family: arial;
            margin-top: 5px;
            display: inline-block;

        }

        .bouton{

            margin-bottom: 5px;
        }

        input{

        }

        .erreur{

            color: red; 
            font-size: 25px ;
            font-weight: bold;
            position: absolute; 
            top: 60.8%;
            right: 40%;
            width: 400px;
        }

    </style>

</head>

<?php 

if(isset($_GET["message"])){

    echo "<div class='erreur'> Login ou/et password incorrect</div>";

}

if(isset($_GET["miss"])){

    echo "<div class='erreur'> Veuillez remplir tous les champs ...</div>";
    
    }

?>

    <body style="background-image:url('fond.jpg')">

<div class="bigbox">
    <h1 class="titre">CONNECTION</h1>
    <form action="bddtest.php" method="POST">
        <div class="container">
            <div class="form">Email: <br><input type="text" name="mail"></div>           
            <div class="form">Mot de passe : <br><input type= "text" name="mdp" id=""></div>
            <div><br><input class="bouton" style="color : black; font-size: 20px; font-weight: bold;" type="submit" name="valider" value="Envoyer"><div>
        </div>
    </form>
    <a href='register.php'>Insciption</a>
</div>
</body>

</html>