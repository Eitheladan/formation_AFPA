<?php
require_once ('models/modelCours.php'); // toutes les fonctions de gestion de la BDD pour les cours
require_once ('models/modelEtudiant.php'); // toutes les fonctions de gestion de la BDD pour les etudiants
require_once ('models/modelInscription.php');


function afficheInscriptionCours($id)
{
    $req = selectUnEtudiant($id);
    $result = selectAllCours();
    require_once('views/viewInscriptionCours.php');
}

function rqpInscription()
{    
    $id=$_POST['id'];
    $id2 = $_POST['cours'];
    foreach($id2 as $element){
    enregistreInscription($id, $element);    
    }
    header("location: afficheInscriptionCours/".$id);
}

function affichePlaningEtudiant($id)
{
    $result = rqpPlaningEtudiant($id);
    $req = selectUnEtudiant($id);
    require_once('views/viewPlaningEtudiant.php');

}

function affichePlaningEtudiants()
{
   $result = rqpPlaningEtudiants();
   require_once('views/viewPlaningEtudiants.php');

}

?>