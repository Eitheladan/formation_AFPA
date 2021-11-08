<?php
session_start();
define("_BASE","/ECOMMERCE");

// déconnexion automatique au bout de 30 mn d'inactivité
if (isset($_SESSION['LAST_ACTIVITY'])){

    if (time() - $_SESSION['LAST_ACTIVITY'] > 1800) {
  
       // session timed out
       session_unset();     // unset $_SESSION variable for the run-time 
       session_destroy();   // destroy session data in storage
       header('location:'._BASE.'/controllerUser/afficheAccueilClient');
    } else {
  
        $_SESSION["LAST_ACTIVITY"] = time();
   }
  }

if($_GET['action']) {
$params = explode("/", $_GET['action']);

// je récupere le contenu du paramètres action qui possède au minimum
// 1) le nom d'un controller 
// 2) le nom d'une fonction qui va s'appliquer sur le contrôleur
// http://localhost/ECOMMERCE/controller/action
// controller sera le nom d'un controller qui sera chargé
// et action sera la fonction à executer sue ce controller. 

if($params[0] !=  "") {

    $controller = $params[0];
    //$controller vaudra la chaine de caractère "controllerEtudiant"

    $action = "";

    if(isset($params[1])) { $action = $params[1]; }
    // $action vaudra pour cet exemple la chaine de caractère "test"

    require_once('controllers/'.$controller.'.php');
    // require va charger le controller 'controllerUser.php" qui se trouve dans le répertoire controllers 
    // c'est comme si on avait tapé 
    // require_once('controllers/controllerUser.php') ;
    if( function_exists($action)) {
        // pour cet exemple si la fonction test() existe dans le controller controllerUser
        // elle execute la fonction test()
        if (isset($params[2])) {
                $action($params[2]);
        
        } else {
                $action();
        }
    } else {
        // sinon la fonction n'existe pas 
        header('location:'._BASE.'/controllerUser/afficheAccueilClient');
    }
 }
}else{
    header('location:'._BASE.'/controllerUser/afficheAccueilClient');
}

?>