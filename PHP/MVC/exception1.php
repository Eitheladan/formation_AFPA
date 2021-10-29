<?php

class Consomme{

    public function calcul ($distance, $essence) {

        if ($essence <=0) {
            throw new Exception ("Le carburant ne peut être inférieur ou égal à 0<hr>");
        }
        return $distance / $essence ;
    }
}

$datasVoitures = array (
    
    array(50,10),
    array(50,0),
    array(50,-3),
    array(50,5),

);

foreach ($datasVoitures as $element => $value){

    try{    
    $conso = new Consomme();
    echo $conso->calcul($value[0],$value[1])."<hr>"; 
    }catch(Exception $e){
        echo $e->getMessage();
        echo"<hr>";
        echo $e->getFile();
        echo"<hr>";
        echo "Thrown at : ".$e->getLine()."<hr>";
    }
}
    

?>