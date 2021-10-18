<?php 

session_start();

$bdd = new PDO('mysql:host=localhost;dbname=mon_e_commerce;charset=UTF8','root','') ;
$bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$email = $_POST['email'];
$rqp_mdp = $_POST['mdp'];

$req = "SELECT * FROM utilisateur WHERE email=?";
$req_verif = $bdd->prepare($req);
$req_verif->execute(array($email));
$row=$req_verif->fetch();
$id=$row['id_client'];
$mdp=$row['mdp'];
$nom=$row['nom'];
$prenom=$row['prenom'];
$role=$row['id_role'];

$rqp_role = "SELECT * FROM role WHERE id_role=?";
$req_role = $bdd->prepare($rqp_role);
$req_role->execute(array($role));
$row2=$req_role->fetch();
$role2=$row2['type'];

$verif=password_verify($rqp_mdp,$mdp);

if(isset($_POST['valider'])){

    if(!empty($_POST["email"]) && !empty($_POST["mdp"])){

        if($verif==true){

            $_SESSION["id"] = $id;
            $_SESSION["nom"] = $nom;
            $_SESSION["prenom"] = $prenom;
            $_SESSION["role"] = $role2;            

            if ($role2=="Admin"){
                header('Location:site_admin.php');
                exit;
            }else{
                header('Location:site_client.php');
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