<?php
require_once('models/model.php');


// Enregictrement du cours
function enregistreCours( $code, $titre, $langage)
{
    $bddPDO = connexionBDD();
    $requete = $bddPDO->prepare('INSERT INTO cours(code, titre, langage) 
        VALUES (:code, :titre, :langage)');

    
    $requete->bindvalue(':code', $code);
    $requete->bindvalue(':titre', $titre);
    $requete->bindvalue(':langage', $langage);
   

    $resultAddCours = $requete->execute();
    return $resultAddCours;    
}

//Selection de tous les cours pour affichage
function selectAllCours()
{
    $bddPDO = connexionBDD();
    $requete = $bddPDO->prepare('SELECT * FROM cours ORDER BY code');
    $requete->execute(array());
    $case=$requete->fetchAll();
    return $case;
}

// selection d'un cours pour affichage
function selectUnCours($id)
{
    $bddPDO = connexionBDD();
    $requete = $bddPDO->prepare('SELECT * FROM cours WHERE id='.$id);
    $requete->execute();
    $case=$requete->fetchAll();
    return $case;
}

// Modif du cours
function majCours($code, $titre, $langage, $id2)
{
    $bddPDO = connexionBDD();
    $requete = $bddPDO->prepare("UPDATE `cours` SET code=:code, titre=:titre, langage=:langage WHERE id=:id;");
    $requete->execute(array(
        'code'=>$code,
        'titre'=>$titre,
        'langage'=>$langage,
        'id'=>$id2,
    ));    
}

// suppression d'un Cours
function SupprCours($id)
{
    $bddPDO = connexionBDD();
    $requete = $bddPDO->prepare("DELETE FROM `Cours` WHERE id=".$id);
    $requete->execute();
}

?>