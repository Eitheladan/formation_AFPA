<?php

$bdd = new PDO("mysql:host=localhost;dbname=formation;charset=UTF8","root","");

$email = htmlspecialchars($_POST["email"]);
$password = htmlspecialchars($_POST["mdp"]);
$hash = password_hash($password,PASSWORD_DEFAULT);
$nom = htmlspecialchars($_POST["nom"]);
$prenom = htmlspecialchars($_POST["prenom"]);
$role = htmlspecialchars($_POST["role"]);
$tph = htmlspecialchars($_POST["tph"]);

$sql = $bdd->prepare ("INSERT INTO `utilisateur` (`email`, `motdepasse`, `nom`, `prenom`, `role`, `tph`) VALUES (?, ?, ?, ?, ?, ?);") ;
$sql->execute(array($email,$hash,$nom,$prenom,$role,$tph));


$sql = 'SELECT * FROM utilisateur WHERE email= ?';
$result = $bdd->prepare($sql);
$result->execute(array($email));
$row= $result->fetch();

$id_utilisateur=$row['id'];
$numero = htmlspecialchars($_POST["numero"]);
$voie = htmlspecialchars($_POST["voie"]);
$adresse1 = htmlspecialchars($_POST["adresse1"]);
$adresse2 = htmlspecialchars($_POST["adresse2"]);
$code_post = htmlspecialchars($_POST["code_post"]);
$ville = htmlspecialchars($_POST["ville"]);


$sql2 = $bdd->prepare ("INSERT INTO `adresse` (`id_utilisateur`, `numero`, `voie`, `adresse1`, `adresse2`, `code_post`,`ville`) VALUES (?, ?, ?, ?, ?, ?,?);") ;
$sql2->execute(array($id_utilisateur,$numero,$voie,$adresse1,$adresse2,$code_post,$ville));



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