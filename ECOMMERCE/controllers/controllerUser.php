<?php
require_once ('models/modelUser.php');

function afficheAccueilAdmin()
{
    require_once('views/viewAccueilAdmin.php');
}

function afficheAccueilClient()
{
    require_once('views/viewAccueil.php');
}

function formAjoutUser()
{
    require_once('views/viewAddUser.php');
}

function ajouterUnUser()
{
    $prenom = stripslashes(trim(htmlspecialchars($_POST['prenom'])));
    $nom = stripslashes(trim(htmlspecialchars($_POST['nom'])));
    $mail = stripslashes(trim(htmlspecialchars($_POST['mail'])));
    $password = stripslashes(trim(htmlspecialchars($_POST['password'])));
    $hash = password_hash($password,PASSWORD_DEFAULT);
    

    enregistreUser($prenom, $nom, $mail, $hash);
    header('location:'._BASE.'/controllerLogin/afficheLogin');
}

function afficheAllUsers(){
    
    $req = selectAllUsers();
    require_once('views/viewUsers.php');
}

function modifUser($id)
{
    $req = selectUnUser($id);
    require_once('views/viewFormModifUser.php');
}

function rqpMajUser()
{    
    $id2=$_POST['id'];
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $mail = $_POST['mail'];
    $password = $_POST['password'];
    $hash = password_hash($password,PASSWORD_DEFAULT);
    $role = $_POST['role'];
    majUser($prenom, $nom, $mail, $hash, $role, $id2);
    header('location:'._BASE.'/controllerUser/afficheAllUsers' );
}

function lanceSupprUser($id)
{
    SupprUser($id);
    header('location:'._BASE.'/controllerUser/afficheAllUsers');
}

?>