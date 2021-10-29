<?php
require_once('models/model.php');


// Enregictrement de l'étudiant
function enregistreEtudiant( $prenom, $nom, $mail, $password)
{
    $bddPDO = connexionBDD();
    $requete = $bddPDO->prepare('INSERT INTO etudiants(prenom, nom, mail, password) 
        VALUES (:prenom, :nom, :mail, :password)');

    
    $requete->bindvalue(':prenom', $prenom);
    $requete->bindvalue(':nom', $nom);
    $requete->bindvalue(':mail', $mail);
    $requete->bindvalue(':password', $password);

    $resultAddEtudiant = $requete->execute();
    return $resultAddEtudiant;    
}

//Selection de tous les etudiants pour affichage
function selectAllEtudiants()
{
    $bddPDO = connexionBDD();
    $requete = $bddPDO->prepare('SELECT * FROM etudiants');
    $requete->execute(array());
    $case=$requete->fetchAll();
    return $case;
}

// selection d'un etudiant pour affichage
function selectUnEtudiant($id)
{
    $bddPDO = connexionBDD();
    $requete = $bddPDO->prepare('SELECT * FROM etudiants WHERE id_etudiant='.$id);
    $requete->execute();
    $case=$requete->fetchAll();
    return $case;
}

// Modif de l'etudiant
function majEtudiant($prenom, $nom, $mail, $password, $id2)
{
    $bddPDO = connexionBDD();
    $requete = $bddPDO->prepare("UPDATE `etudiants` SET prenom=:prenom, nom=:nom, mail=:mail, password=:password  WHERE id_etudiant=:id;");
    $requete->execute(array(
        'prenom'=>$prenom,
        'nom'=>$nom,
        'mail'=>$mail,
        'password'=>$password,
        'id'=>$id2,
    ));    
}

// suppression d'un etudiant
function SupprEtudiant($id)
{
    $bddPDO = connexionBDD();
    $requete = $bddPDO->prepare("DELETE FROM `etudiants` WHERE id_etudiant=".$id);
    $requete->execute();
}

?>