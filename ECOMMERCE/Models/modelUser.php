<?php
require_once ('Models/Model.php');

function enregistreUser( $prenom, $nom, $mail, $hash)
{
    $bddPDO = connexionBDD();
    $requete = $bddPDO->prepare('INSERT INTO users(nom, prenom, mail, password) 
        VALUES (:nom, :prenom, :mail, :password)');

    $requete->bindvalue(':nom', $nom);
    $requete->bindvalue(':prenom', $prenom);
    $requete->bindvalue(':mail', $mail);
    $requete->bindvalue(':password', $hash);
    
    $resultAddUser = $requete->execute();
    return $resultAddUser;    
}

function selectAllUsers()
{
    $bddPDO = connexionBDD();

    $rqp_prod=$bddPDO->prepare("SELECT * FROM users");
    $rqp_prod->execute(array());
    $case = $rqp_prod->fetchAll();
    return $case;
}

function selectUnUser($id)
{
    $bddPDO = connexionBDD();
    $requete = $bddPDO->prepare('SELECT * FROM users WHERE id_user='.$id);
    $requete->execute();
    $case=$requete->fetchAll();
    return $case;
}

// Modif de l'etudiant
function majUser($nom, $prenom, $mail, $hash, $role, $id2)
{
    $bddPDO = connexionBDD();
    $requete = $bddPDO->prepare("UPDATE `users` SET nom=:nom, prenom=:prenom, mail=:mail, password=:password, id_role=:role WHERE id_user=:id;");
    $requete->execute(array(
        'nom'=>$nom,
        'prenom'=>$prenom,
        'mail'=>$mail,
        'password'=>$hash,
        'role'=>$role,
        'id'=>$id2
    ));    
}

// suppression d'un etudiant
function SupprUser($id)
{
    $bddPDO = connexionBDD();
    $requete = $bddPDO->prepare("DELETE FROM `users` WHERE id_user=".$id);
    $requete->execute();
}

?>