<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>

<style>

.form-3 {
    font-family: 'Ubuntu', 'Lato', sans-serif;
    font-weight: 400;
    
    /* Size and position */
    width: 300px;
    position: relative;
    margin: 60px auto 30px;
    padding: 10px;
    overflow: hidden;

    /* Styles */
    background: #111; 
    border-radius: 0.4em;
    border: 1px solid #191919;
    box-shadow: 
        inset 0 0 2px 1px rgba(255,255,255,0.08), 
        0 16px 10px -8px rgba(0, 0, 0, 0.6);
}

.form-3 label {
    
    /* Size and position */
    width: 50%;
    float: left;
    padding-top: 9px;

    /* Styles */
    color: #ddd;
    font-size: 12px;
    text-transform: uppercase;
    letter-spacing: 1px;
    text-shadow: 0 1px 0 #000;
    text-indent: 10px;
    font-weight: 700;
    cursor: pointer;
}

.form-3 input[type=text],
.form-3 input[type=password] {
    /* Size and position */
    width: 50%;
    float: left;
    padding: 8px 5px;
    margin-bottom: 10px;
    font-size: 12px;

    /* Styles */
    background: linear-gradient(#1f2124, #27292c);    
    border: 1px solid #000;
    box-shadow:
        0 1px 0 rgba(255,255,255,0.1);
    border-radius: 3px;

    /* Font styles */
    font-family: 'Ubuntu', 'Lato', sans-serif;
    color: #fff;

}

.form-3 input[type=text]:hover,
.form-3 input[type=password]:hover,
.form-3 label:hover ~ input[type=text],
.form-3 label:hover ~ input[type=password] {
    background: #27292c;
}

.form-3 input[type=text]:focus, 
.form-3 input[type=password]:focus {
    box-shadow: inset 0 0 2px #000;
    background: #494d54;
    border-color: #51cbee;
    outline: none; /* Remove Chrome outline */
}

.form-3 p:nth-child(3),
.form-3 p:nth-child(4) {
    float: left;
    width: 50%;
}

.form-3 label[for=remember] {
    width: auto;
    float: none;
    display: inline-block;
    text-transform: capitalize;
    font-size: 11px;
    font-weight: 400;
    letter-spacing: 0px;
    text-indent: 2px;
}

.form-3 input[type=checkbox] {
    margin-left: 10px;
    vertical-align: middle;
}

.form-3 input[type=submit] {
    /* Width and position */
    width: 100%;
    padding: 8px 5px;
  
    /* Styles */
    border: 1px solid #0273dd; /* Fallback */
    border: 1px solid rgba(0,0,0,0.4);
    box-shadow:
        inset 0 1px 0 rgba(255,255,255,0.3),
        inset 0 10px 10px rgba(255,255,255,0.1);
    border-radius: 3px;
    background: #38a6f0;
    cursor:pointer;
  
    /* Font styles */
    font-family: 'Ubuntu', 'Lato', sans-serif;
    color: white;
    font-weight: 700;
    font-size: 15px;
    text-shadow: 0 -1px 0 rgba(0,0,0,0.8);
}

.form-3 input[type=submit]:hover { 
    box-shadow: inset 0 1px 0 rgba(255,255,255,0.6);
}

.form-3 input[type=submit]:active { 
    background: #287db5;
    box-shadow: inset 0 0 3px rgba(0,0,0,0.6);
    border-color: #000; /* Fallback */
    border-color: rgba(0,0,0,0.9);
}

.no-boxshadow .form-3 input[type=submit]:hover {
    background: #2a92d8;
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

<body>



    <form class="form-3" action="bddtest.php" method="POST">
        <p class="clearfix">
            <label for="login">Login</label>
            <input type="text" name="mail" id="login" placeholder="Votre email">
        </p>
        <p class="clearfix">
            <label for="password">Mot de passe</label>
            <input type="password" name="mdp" id="password" placeholder="Votre mot de passe"> 
        </p>
        <p class="clearfix">
            <input type="checkbox" name="remember" id="remember">
            <label for="remember">Se souvenir de moi</label>
        </p>
        <p class="clearfix">
            <input type="submit" name="valider" value="Envoyer">
        </p>       
    </form>
    
</body>
</html>