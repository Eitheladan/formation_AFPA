<?php
session_start();
define("_BASE","/ECOMMERCE");

if (isset($_SESSION['LAST_ACTIVITY'])){

    if ($_SESSION['LAST_ACTIVITY'] + 30*60 < time()) {
  
       // session timed out
       session_unset();     // unset $_SESSION variable for the run-time 
       session_destroy();   // destroy session data in storage
       header('location:'._BASE.'/controllerUser/afficheAccueilClient');
    } else {
  
      // session ok
   }
  }

if($_GET['action']) {
$params = explode("/", $_GET['action']);

// je récupere le contenu du paramètres action qui possède au minimum
// 1) le nom d'un controller 
// 2) le nom d'une fonction qui va s'appliquer sur le contrôleur
// http://localhost/mvc1/controller/action
// echo $params[0]; // c'est le controller
// echo $params[1]; // c l'action 
// controller sera le nom d'un controller qui sera chargé
// et action sera la fonction à executer sue ce controller. 
//
// exemple pour une action sans paramètres -> http://localhost/mvc1/controllerEtudiant/test
// exemple pour une action avec 1 paramètre -> http://localhost/mvc1/controllerEtudiant/cree/12

if($params[0] !=  "") {

    $controller = $params[0];
    //$controller vaudra la chaine de caractère "controllerEtudiant"

    $action = "";

    if(isset($params[1])) { $action = $params[1]; }
    // $action vaudra pour cet exemple la chaine de caractère "test"

    require_once('controllers/'.$controller.'.php');
    // require va charger le controller 'controllerEtudiant.php" qui se trouve dans le répertoire controllers 
    // c'est comme si on avait tapé 
    // require_pnce('controllers/controllerEtudiant.php') ;
    if( function_exists($action)) {
        // pour cet exemple si la fonction test() existe dans le controller controllerEtudiant
        // elle execute la fonction test()
        if (isset($params[2])) {
                $action($params[2]);
        
        } else {
                $action();
        }
    } else {
        header('location:'._BASE.'/controllerUser/afficheAccueilClient');
    }
 }
}

?>