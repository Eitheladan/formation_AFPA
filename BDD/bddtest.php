<?php
session_start();

$bdd = new PDO('mysql:host=localhost;dbname=formation;charset=UTF8','root','') ;

// contre les attaques XSS utiliser htmlspecialchars (php)

$login = htmlspecialchars($_POST["mail"]);
$mdp = htmlspecialchars($_POST["mdp"]);

$mdp_verif = "SELECT * FROM utilisateur WHERE email=?";
$req_mdp = $bdd->prepare($mdp_verif);
$req_mdp->execute(array($login));
$case=$req_mdp->fetch();
$id=$case['id'];
$mdp_claire=$case['motdepasse'];
$nom=$case['nom'];
$prenom=$case['prenom'];
$role=$case['role'];
$tph=$case['tph'];

$role_verif= "SELECT * FROM role WHERE id=?";
$req_role = $bdd->prepare($role_verif);
$req_role->execute(array($role));
$case2=$req_role->fetch();
$role2=$case2['type'];

$verif=password_verify($mdp,$mdp_claire);

if(isset($_POST['valider'])){

    if(!empty($_POST["mail"]) && !empty($_POST["mdp"])){

        if($verif==true){

            $_SESSION["id"] = $id;
            $_SESSION["nom"] = $nom;
            $_SESSION["prenom"] = $prenom;
            $_SESSION["role"] = $role2;
            $_SESSION["tph"] = $tph;

            if ($role2=="Admin"){

                header('Location:accueil.php?admin="admin"');
                exit;

            }else{
                header('Location:accueil.php');
                exit;
            }

        }else{

            header('Location:login.php?message="erreur"');
            
        }
         
    }else{

        header('Location:login.php?miss="erreur"');
    }
}

?>

SELECT utilisateur.nom, utilisateur.prenom, adresse.numero, adresse.rue, adresse.cp, adresse.ville FROM utilisateur,adresse WHERE adresse.id_utilisateur = utilisateur.id
SELECT utilisateur.nom AS nom utilisateur.prenom AS prenom FROM utilisateur AS u, adresse AS ad WHERE ad.id_utilisateur = utilisateur.id

SELECT * FROM TABLE1,TABLE2
WHERE TABLE1.id = TABLE2.id_fk

SELECT * FROM TABLE1
INNER JOIN TABLE2
ON TABLEAU1.id = TABLE2.id_fk
