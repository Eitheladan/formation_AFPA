<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>

        html{

        font-family: arial;
        }

        .bigbox{

            background-color: rgba(255, 255, 255, .5);
            width : 600px;
            height : 300px;
            margin: 18.5% auto 0% auto;
            text-align: center;
            border-width: 5px; 
            border-style: solid; 
            border-color: RGBA(255,205,55,0.88);
            border-radius: 15px;
            box-shadow: 20px 19px 14px 5px rgba(0,0,0,0.57);
            -webkit-box-shadow: 20px 19px 14px 5px rgba(0,0,0,0.57);
            -moz-box-shadow: 20px 19px 14px 5px rgba(0,0,0,0.57);
        }

        .bigbox h1{

            padding-top: 0px;
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
            height: 200px;
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
            color : black;
            font-size: 20px;
            font-weight: bold;
            height : 30px;
        }

        .bouton:hover{

            margin-bottom: 5px;
            color : white;
            font-size: 20px;
            font-weight: bold;
            background-color: black;

        }

        
        .erreur{

            color: #B62B1B; 
            font-size: 45px ;
            font-weight: bold;
            position: absolute; 
            top: 20%;
            right: 28%;
            width: 800px;
            background-color: RGBA(92,184,80,0.84); 
            border-radius: 15px;
            text-align: center;
            border-width: 5px; 
            border-style: solid; 
            border-color: RGBA(255,205,55,0.88);
        }

        .register{

            font-size: 25px;
            text-decoration: none;
           
            
        }

        .register a{

        font-size: 25px;
        text-decoration: none;
        color: #127D60;
        font-weight: bold;
        }

        .register a:hover{

        color: #155767;
        font-size: 27px;
        
        text-decoration: #155767 wavy underline;

        }

        input{

            height: 25px;
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
            <div class="form">Email : <br><input type="email" name="mail"></div>           
            <div class="form">Mot de passe : <br><input type= "password" name="mdp" id=""></div>
            <div><br><input class="bouton" type="submit" name="valider" value="Envoyer"><div>
        </div>
    </form>
    <br><div class="register">Première visite ? <a class="register" href='register.php'>Inscrivez-vous !</a></div>
</div>
</body>

</html>