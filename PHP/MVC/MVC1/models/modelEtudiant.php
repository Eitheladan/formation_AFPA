<?php
require_once('models/model.php');

function enregistreEtudiant( $prenom, $nom, $mail, $password){

    $bddPDO = connexionBDD();
    $requete = $bddPDO->prepare('INSERT INTO etudiants(prenom, nom, mail, password) 
        VALUES (:prenom, :nom, :mail, :password)');

    //$requete->bindvalue(':studentINE', $studentINE);
    $requete->bindvalue(':prenom', $prenom);
    $requete->bindvalue(':nom', $nom);
    //$requete->bindvalue(':adress', $adress);
    //$requete->bindvalue(':city', $city);
    $requete->bindvalue(':mail', $mail);
    $requete->bindvalue(':password', $password);

    $resultAddEtudiant = $requete->execute();
    return $resultAddEtudiant;
    
}

function selectAllEtudiants(){

    $bddPDO = connexionBDD();
    $requete = $bddPDO->prepare('SELECT * FROM etudiants');
    $requete->execute(array());
    while($case=$requete->fetch()){
        $prenom=$case['prenom'];
        $nom=$case['nom'];
        $mail=$case['mail'];
        $password=$case['password'];

?>
            <tr><td>Prénom : </td><td><?=$prenom?></td></tr>
            <tr><td>Nom : </td><td><?=$nom?></td></tr>
            <tr><td>Email : </td><td><?=$mail?></td></tr>
            <tr><td>Mot de passe : </td><td><?=$password?></td></tr>
            <tr><td><hr></td></tr>
            
        <?php } 
        
        
}

?>