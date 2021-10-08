<?php

$bdd = new PDO('mysql:host=localhost;dbname=formation;charset=UTF8','root','') ;

if (($myfile = fopen("Classeur1.csv","r")) !== FALSE) {
    while (($test = fgetcsv($myfile,1000,";" ,"\n")) !== FALSE) {      
        
        $id=$test[0];
        $role=$test[1];
        $nom=$test[2];
        $prenom=$test[3];
        $age=$test[4];
        $adresse=$test[5];
        
        $sql2 = $bdd->prepare ("INSERT INTO `test` (`role`, `nom`, `prénom`, `age`, `adresse`) VALUES (?, ?, ?, ?, ?);") ;
        $sql2->execute(array($role,$nom,$prenom,$age,$adresse));

        print_r($id.$role.$nom);
    }
    fclose($myfile);
}
?>