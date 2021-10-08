<?php

// ouverture de la bdd

$bdd = new PDO("mysql:host=localhost;dbname=formation;charset=UTF8","root","");

// enregistrement bdd utilisateur

$email = htmlspecialchars($_POST["email"]);
$password = htmlspecialchars($_POST["mdp"]);
$hash = password_hash($password,PASSWORD_DEFAULT);
$nom = htmlspecialchars($_POST["nom"]);
$prenom = htmlspecialchars($_POST["prenom"]);
$role = htmlspecialchars($_POST["role"]);
$tph = htmlspecialchars($_POST["tph"]);


$sql = $bdd->prepare ("INSERT INTO `utilisateur` (`email`, `motdepasse`, `nom`, `prenom`, `tph`) VALUES (?, ?, ?, ?, ?);");
$sql->execute(array($email,$hash,$nom,$prenom,$tph));

// enregistrement bdd adresse

$id_utilisateur=$bdd->lastInsertId();
$numero = htmlspecialchars($_POST["numero"]);
$voie = htmlspecialchars($_POST["voie"]);
$adresse1 = htmlspecialchars($_POST["adresse1"]);
$adresse2 = htmlspecialchars($_POST["adresse2"]);
$code_post = htmlspecialchars($_POST["code_post"]);
$ville = htmlspecialchars($_POST["ville"]);


$sql2 = $bdd->prepare ("INSERT INTO `adresse` (`id_utilisateur`, `numero`, `voie`, `adresse1`, `adresse2`, `code_post`,`ville`) VALUES (?, ?, ?, ?, ?, ?,?);") ;
$sql2->execute(array($id_utilisateur,$numero,$voie,$adresse1,$adresse2,$code_post,$ville));

// // enregistrement bdd role

// $sql3 = $bdd->prepare ("INSERT INTO `role` (`type`) VALUES (?);") ;
// $sql3->execute(array($role));

// parcours de la bdd role pour enregistrement de l'id role

print_r($role);

$sql3 = "SELECT * FROM role WHERE type=?";
$result2 = $bdd->prepare($sql3);
$result2->execute(array($role));
$row2 = $result2->fetch();

$id_role = $row2['id'];

print_r($id_role);

$sql4 = $bdd->prepare("UPDATE `utilisateur` SET `role`=:id_role WHERE id=:id_utilisateur;");
$sql4->execute(array(

    'id_role'=>$id_role,
    'id_utilisateur'=>$id_utilisateur,
));

header('Location:login.php');

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