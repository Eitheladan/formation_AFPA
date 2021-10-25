<?php

require_once ('models/modelEtudiant.php'); // toutes les fonctions de gestion de la BDD pour les etudiants

// function test(){

// echo "je suis le controller etudiant";
// }

// function cree($etudiant){
//     echo "je cree un étudiant numero : ".$etudiant ; 
// }


function formAjoutEtudiant(){
    require_once('views/viewAddEtudiant.php');
}

function ajouterUnEtudiant(){

    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $mail = $_POST['mail'];
    $password = $_POST['password'];

    enregistreEtudiant( $prenom, $nom, $mail, $password);

}

function tabAfficheEtudiants(){
    require_once('views/viewListeEtudiants.php');
}

function getAllEtudiants(){
    
    selectAllEtudiants();

    
    
}
?>