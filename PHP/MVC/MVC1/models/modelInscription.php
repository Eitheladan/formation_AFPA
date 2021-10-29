<?php
require_once('models/model.php');


function enregistreInscription($id, $element)
{
    $bddPDO = connexionBDD();
    $requete = $bddPDO->prepare('INSERT INTO inscription(id,id_cours) 
        VALUES (:id, :id2)');
    
    $requete->bindvalue(':id', $id);
    $requete->bindvalue(':id2', $element);
    
    $resultInscription = $requete->execute();
    return $resultInscription;    
}

function rqpPlaningEtudiant($id)
{
    $bddPDO = connexionBDD();
    $requete = "SELECT cours.id, cours.code, cours.titre, cours.langage, inscription.id, inscription.id_cours 
                FROM cours, inscription
                WHERE inscription.id ='$id' AND inscription.id_cours = cours.id";
                $result = $bddPDO->query($requete);
                return $result;
}

function rqpPlaningEtudiants()
{
    $bddPDO = connexionBDD();
    $requete = "SELECT etudiants.id_etudiant, etudiants.prenom, etudiants.nom ,cours.id, cours.code, cours.titre, cours.langage, inscription.id, inscription.id_cours 
                FROM etudiants, cours, inscription
                WHERE inscription.id = etudiants.id_etudiant AND inscription.id_cours = cours.id ORDER BY inscription.id";
                $result = $bddPDO->query($requete);
                return $result;
}

?>