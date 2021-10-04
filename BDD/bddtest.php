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
$verif=password_verify($mdp,$mdp_claire);

if(isset($_POST['valider'])){

    if(!empty($_POST["mail"]) && !empty($_POST["mdp"])){

        if($verif==true){

            $_SESSION["id"] = $id;
            $_SESSION["nom"] = $nom;
            $_SESSION["prenom"] = $prenom;
            $_SESSION["role"] = $role;
            $_SESSION["tph"] = $tph;

            if ($role=="Admin"){

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
