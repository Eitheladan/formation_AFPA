<?php
require_once ('models/modelCours.php'); // toutes les fonctions de gestion de la BDD pour les cours

function formAjoutCours()
{
    require_once('views/viewAddCours.php');
}

function ajouterUnCours()
{
    $code = $_POST['code'];
    $titre = $_POST['titre'];
    $langage = $_POST['langage'];
    
    enregistreCours($code, $titre, $langage);
    header('location: formAjoutCours');
}

function tabAfficheCours()
{
    $result = selectAllCours();
    require_once('views/viewListeCours.php');
}

function modifCours($id)
{
    $req = selectUnCours($id);
    require_once('views/viewFormModifCours.php');
}

function rqpMajCours()
{    
    $id2=$_POST['id'];
    $code = $_POST['code'];
    $titre = $_POST['titre'];
    $langage = $_POST['langage'];
    majCours($code, $titre, $langage, $id2);
    header("location: tabAfficheCours" );
}

function lanceSupprCours($id)
{
    SupprCours($id);
    header("location: ../tabAfficheCours" );
}
?>