<?php

if ($_GET['action']) {

    $params = explode("/", $_GET['action']);

    // print_r($params);


    if($params[0]!= ""){

        $controller = $params[0];
        $action = "";

        if(isset($params[1])){ $action = $params[1];}

        require_once ('controllers/'.$controller.'.php');

        if(function_exists($action)){
            if(isset($params[2])){
                $action($params[2]);
            }else{
            $action();
            }
        }else{
            echo "Fonction n'existe pas";
        }
    }
}


?>