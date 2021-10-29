<?php
require_once ('models/modelEtudiant.php'); // toutes les fonctions de gestion de la BDD pour les etudiants

function formAjoutEtudiant()
{
    require_once('views/viewAddEtudiant.php');
}

function ajouterUnEtudiant()
{
    $prenom = htmlspecialchars($_POST['prenom']);
    $nom = $_POST['nom'];
    $mail = $_POST['mail'];
    $password = $_POST['password'];
    $hash = password_hash($password,PASSWORD_DEFAULT);

    enregistreEtudiant($prenom, $nom, $mail, $hash);
    header('location: formAjoutEtudiant');
}

function tabAfficheEtudiants()
{
    $result = selectAllEtudiants();
    require_once('views/viewListeEtudiants.php');
}

function modifEtudiant($id)
{
    $req = selectUnEtudiant($id);
    require_once('views/viewFormModifEtudiant.php');
}

function rqpMajEtudiant()
{    
    $id2=$_POST['id'];
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $mail = $_POST['mail'];
    $password = $_POST['password'];
    majEtudiant($prenom, $nom, $mail, $password, $id2);
    header("location: tabAfficheEtudiants" );
}

function lanceSupprEtudiant($id)
{
    SupprEtudiant($id);
    header("location: ../tabAfficheEtudiants" );
}
?>