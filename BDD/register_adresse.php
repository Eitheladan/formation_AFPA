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

        html{

            font-family: arial;
        }

        .bigbox{
            
            background-color: rgba(255, 255, 255, .5);
            width : 600px;
            height : 420px;
            margin: 10% auto 0% auto;
            text-align: center;
            border-width: 5px; 
            border-style: solid; 
            border-color: RGBA(255,205,55,0.88);
            border-radius: 15px;
        }

        .bigbox h1{

            padding-top: 10px;
            font-family: arial;
        }

        .container2{

        display: grid;
        grid-template-columns : repeat(2, 225px);
        grid-template-rows : repeat(3,60px);
        grid-gap: 1px;
        position : absolute;
        top: 30%;
        left: 38%;
        padding-top : 5px;
        border-width: 2px; 
        border-style: solid; 
        border-color: black; 
        width: 450px; 
        height: 300px;
        background-color: RGBA(92,184,80,0.84); 
        border-radius: 15px;
        padding-left: 5px;
        }

        #num{
        grid-column: 1/2;
        grid-row: 1/2;
        }

        #input_num{ 
        width: 50px;       
        }

        #voie{
        grid-column: 2/3;
        grid-row: 1/2;

        }

        #adresse1{
        grid-column: 1/2;
        grid-row: 2/3;

        }

        #adresse2{
        grid-column: 2/3;
        grid-row: 2/3;

        }

        #code_post{
        grid-column: 1/2;
        grid-row: 3/4;

        }
        #ville{
        grid-column: 2/3;
        grid-row: 3/4;

        }

        .form{
        color : black; 
        font-size: 25px; 
        font-weight: bold; 
        font-family: arial;
        margin-top: 5px;
        display: inline-block;
        }

        .btn{

        text-align: center;
        grid-column: 1/3;
        grid-row: 4/5;
        font-size: 25px;
        }

        #input_btn{

        width: 100px;
        height : 50px;
        background-color: blue;
        font-size: 20px;
        color: white;
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
            <div class="form" id="num">N° : <input id="input_num" type="text" name="numero"></div>
            <div class="form" id="voie">
                <label for="voie">Voie : </label>
                <select id="voie" name="voie">
                    <option value="Avenue">Avenue</option>
                    <option value="Rue">Rue</option>
                    <option value="Voie">Voie</option>
                    <option value="Chemin">Chemin</option>
                </select>
            </div>
            <div class="form" id="adresse">Adresse :<br><input type= "text" name="adresse1" id=""></div>
            <div class="form" id="adresse2">Complément :<br><input type= "text" name="adresse2" id=""></div>
            <div class="form" id="code_post">code postal : <br><input type= "text" name="code_post" id=""></div>
            <div class="form" id ="ville">Ville : <br><input type= "text" name="ville" id=""></div>
            
            
            <div class="btn"><br><input id="input_btn" type="submit" value="Envoyer"><div>
        </div>
    </form>
</div>
</body>

</html>