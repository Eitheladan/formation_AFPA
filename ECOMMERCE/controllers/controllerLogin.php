<?php
require_once ('Models/modelLogin.php');

function afficheLogin(){
    require_once('views/viewLogin.php');
}

function rqpLogin()
{
    $email = stripslashes(trim(htmlspecialchars($_POST['email'])));
    $rqp_mdp = stripslashes(trim(htmlspecialchars($_POST['mdp'])));

    var_dump($email);

$row = verifLogin ($email);

    var_dump($row);

$id=$row['id_user'];
$mdp=$row['password'];
$nom=$row['nom'];
$prenom=$row['prenom'];
$role2=$row['id_role'];


$verif=password_verify($rqp_mdp,$mdp);



    if(!empty($_POST["email"]) && !empty($_POST["mdp"])){

        if($verif==true){

            $_SESSION['LAST_ACTIVITY']=time();
            $_SESSION["id"] = $id;
            $_SESSION["nom"] = $nom;
            $_SESSION["prenom"] = $prenom;
            $_SESSION["role"] = $role2;
           
            if ($role2=="1"){
                header('Location:'._BASE.'/controllerUser/afficheAccueilAdmin');
                exit;
            }else{
                header('Location:'._BASE.'/controllerUser/afficheAccueilClient');
                exit;
            }
        }else{
            
            header('Location:'._BASE.'/controllerLogin/afficheLogin?message="erreur"');            
        }         
    }else{

        header('Location:'._BASE.'/controllerLogin/afficheLogin?miss="erreur"');
        }
    
}

function afficheLogout()
{
    logout();
   
    header('Location:'._BASE.'/controllerUser/afficheAccueilClient');
    exit;

}


?>