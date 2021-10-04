<?php

SELECT * FROM `utilisateur` ORDER BY email
SELECT * FROM `utilisateur` ORDER BY email DESC
SELECT * FROM `utilisateur` WHERE role = "admin" ORDER BY email

UPDATE utilisateur SET password = 'xxxxx' WHERE id = 1

UPDATE utilisateur SET password = 'xxxxx' WHERE email = "eithel57@gmail.com"

DELETE FROM utilisateur WHERE id = 3


$sql = $bdd->prepare ("INSERT INTO `utilisateur` (`email`, `password`, `nom`, `prenom`, `role`, `tph`) VALUES (?, ?, ?, ?, ?, ?);") ;
$sql->execute(array($email,$password,$nom,$prenom,$role,$tph));
$last_id = $bdd->lastInsertId();


Création de BDD en php

CREATE DATABASE maBdd


SELECT * FROM `utilisateur`, role WHERE utilistauer.role = role.id;
SELECT utilisateur.nom, utilisateur.prenom, role.type FROM `utilisateur`, role WHERE utilistauer.role = role.id;

SELECT utilisateur.nom, utilisateur.prenom, telephone.numero FROM `utilisateur`, telephone WHERE utilisateur.id = telephone.id_utilisateur;

?>