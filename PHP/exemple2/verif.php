<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>

        .container{

            texte-align : center;

        }

    </style>

</head>

    <body style="background-image:url('fond.jpg')">
<form action="moulinette2.php" method="POST">
    <div style="margin-left: 80%; margin-top: 50px; border-size: 2px; border-style: solid; border-color: black; width: 180px; padding: 5px; background-color: RGBA(92,184,80,0.84); border-radius: 15px;" class="container">
        <div style="color : black; font-size: 25px; font-weight: bold; font-family: arial;">Identifiant : <br><input type="email" name="email"></div>
        <div style="color : black; font-size: 25px; font-weight: bold; font-family: arial; margin-top: 5px;">Mot de passe : <br><input type= "text" name="mdp" id=""></div>
        <div><br><input style="margin-left: 25%; color : black; font-size: 20px; font-weight: bold;" type="submit" value="Envoyé"><div>
    </div>
</form>
</body>

</html>