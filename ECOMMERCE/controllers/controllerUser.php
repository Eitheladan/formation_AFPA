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
    $prenom = secure_input(ucwords($_POST['prenom']));
    $nom = secure_input(strtoupper($_POST['nom']));
    $mail = secure_input($_POST['mail']);    
    $genre = secure_input($_POST['genre']);
    $password = secure_input($_POST['password']);
    $hash = password_hash($password,PASSWORD_DEFAULT);
    

    enregistreUser($prenom, $nom, $mail, $hash, $genre);
    header('location:'._BASE.'/controllerUser/afficheAccueilClient');
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
    if($password!=''){
    $hash = password_hash($password,PASSWORD_DEFAULT);
    }else{
    $hash=FALSE;
    }
    var_dump($hash);
    $role = $_POST['role'];
    majUser( $nom, $prenom, $mail, $hash, $role, $id2);
    header('location:'._BASE.'/controllerUser/afficheAllUsers' );
}

function lanceSupprUser($id)
{
    SupprUser($id);
    header('location:'._BASE.'/controllerUser/afficheAllUsers');
}

?>