<?php
require_once ('Models/Model.php');

function enregistreUser($prenom, $nom, $mail, $hash, $genre)
{
    $bddPDO = connexionBDD();
    $requete = $bddPDO->prepare('INSERT INTO users(nom, prenom, mail, genre, password) 
        VALUES (:nom, :prenom, :mail, :genre, :password)');

    $requete->bindvalue(':nom', $nom);
    $requete->bindvalue(':prenom', $prenom);
    $requete->bindvalue(':mail', $mail);
    $requete->bindvalue(':genre', $genre);
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
    $requete = $bddPDO->prepare("UPDATE `users` SET nom=:nom, prenom=:prenom, mail=:mail, id_role=:role WHERE id_user=:id;");
    $requete->execute(array(
        'nom'=>$nom,
        'prenom'=>$prenom,
        'mail'=>$mail,        
        'role'=>$role,
        'id'=>$id2
    ));
    if($hash!=false){
    $requete2 = $bddPDO->prepare("UPDATE users SET password=:password WHERE id_user=:id");
    $requete2->execute(array(
        ':password'=>$hash,
        ':id'=>$id2
    ));
    }
}

// suppression d'un etudiant
function SupprUser($id)
{
    $bddPDO = connexionBDD();
    $requete = $bddPDO->prepare("DELETE FROM `users` WHERE id_user=".$id);
    $requete->execute();
}

?>