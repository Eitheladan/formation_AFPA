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

        .bigbox{
            
            background-color: rgba(255, 255, 255, .5);
            width : 600px;
            height : 600px;
            margin: 10% auto 0% auto;
            text-align: center;
        }

        .bigbox h1{

            padding-top: 10px;
            font-family: arial;
        }

        .container2{

            display: flex;
            flex-direction: column;
            flex-wrap: wrap;
            text-align : center;
            position : absolute;
            top: 36%;
            left: 38%;
            padding-top : 5px;
            border-width: 2px; 
            border-style: solid; 
            border-color: black; 
            width: 450px; 
            height: 300px;
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

        select{
            font-size: 15px;
        }

        option{

            font-size: 15px;
        }

    </style>

</head>

    <body style="background-image:url('fond.jpg')">

<div class="bigbox">
    <h1 class="titre">ENREGISTREMENT ADRESSE</h1>
    <form action="insert_adresse.php" method="POST">
        <div class="container2">        
            <div class="form">numero rue : <br><input type="text" name="numero"></div>
            <div class="form"><br>
                <label for="voie">Voie : </label>
                <select id="voie" name="voie">
                    <option value="Avenue">Avenue</option>
                    <option value="Rue">Rue</option>
                    <option value="Voie">Voie</option>
                    <option value="Chemin">Chemin</option>
                </select>
            </div>
            <div class="form">Adresse : <br><input type= "text" name="adresse1" id=""></div>
            <div class="form">Complément : <br><input type= "text" name="adresse2" id=""></div>
            <div class="form">code postal : <br><input type= "text" name="code_post" id=""></div>
            <div class="form">Ville : <br><input type= "text" name="ville" id=""></div>
            
            
            <div><br><input style="color : black; font-size: 20px; font-weight: bold;" type="submit" value="Envoyer"><div>
        </div>
    </form>
</div>
</body>

</html>