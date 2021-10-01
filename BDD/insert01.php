

<?php

$bdd = new PDO("mysql:host=localhost;dbname=formation","root","");

$email= $_POST["email"];
$password=$_POST["mdp"];
$nom=$_POST["nom"];
$prenom=$_POST["prenom"];
$role = $_POST["role"];
$tph = $_POST["tph"];

$sql = $bdd->prepare ("INSERT INTO `utilisateur` (`email`, `password`, `nom`, `prenom`, `role`, `tph`) VALUES (?, ?, ?, ?, ?, ?);") ;
$sql->execute(array($email,$password,$nom,$prenom,$role,$tph));

?>

<?php

//2eme façon

// $bdd = new PDO("mysql:host=localhost;dbname=formation","root","");

// $Request = "INSERT INTO `utilisateur`(`email`, `password`, `nom`, `prenom`, `role`, `tph`) VALUES (:Eml, :Pwd, :Nom, :Pre, :rol, :tph)";
    
//     $sql = $bdd->prepare($Request);

//     //définition de toute les varaibles.
//     // $Id = NULL;
//     $Email = "email@gmail.fr";
//     $pwd = "pwd";
//     $nom = "Callagan";
//     $pre = "Jj";
//     $rol = "User";
//     $tph = "6666666666";

//     // $sql->bindParam(":Id",$Id,PDO::PARAM_INT);
//     $sql->bindParam(":Eml",$Email,PDO::PARAM_STR);
//     $sql->bindParam(":Pwd",$pwd,PDO::PARAM_STR);
//     $sql->bindParam(":Nom",$nom,PDO::PARAM_STR);
//     $sql->bindParam(":Pre",$pre,PDO::PARAM_STR);
//     $sql->bindParam(":rol",$rol,PDO::PARAM_STR);
//     $sql->bindParam(":tph",$tph,PDO::PARAM_STR);

//     $sql->execute();
?>