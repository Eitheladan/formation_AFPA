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
            height : 400px;
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
            top: 37%;
            left: 35%;
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

    </style>

</head>

    <body style="background-image:url('fond.jpg')">

<div class="bigbox">
    <h1 class="titre">ENREGISTREMENT</h1>
    <form action="insert01.php" method="POST">
        <div class="container">
            <div class="form">Email: <br><input type="text" name="email"></div>
            <div class="form">Nom : <br><input type= "text" name="nom" id=""></div>
            <div class="form">Prenom : <br><input type= "text" name="prenom" id=""></div>
            <div class="form">Mot de passe : <br><input type= "text" name="mdp" id=""></div>
            <div class="form">Rôle : <br><input type= "text" name="role" id=""></div>
            <div class="form">Téléphone : <br><input type= "text" name="tph" id=""></div>
            <div><br><input style="color : black; font-size: 20px; font-weight: bold;" type="submit" value="Envoyer"><div>
        </div>
    </form>
</div>
</body>

</html>