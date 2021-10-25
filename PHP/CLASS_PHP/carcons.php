<?php

class CarConstruct{

    // attributs
    private $model ;
    private $color ;

    // declaration de la méthode "magic" __construct
    public  function __construct($model,$color){
        $this->model = $model ;
        $this->color = $color ;
    }

    public function afficheModel() {
        return $this->model ;
    }

    public function afficheColor() {
        return $this->color ;
    }

    public function getModel(){

        return $this->model ;
    }

    public function setModel($model){

        $modelesAutorised = ["CITROEN","MERCEDES","TESLA"];
        //utilisation de la fonction php in_array() pour vérifier qu'un élément se trouve dans le tableau
        if(in_array($modeles,$modelesAutorised)){
        $this->model = $model ;
        }else{
            echo "tu es un flanc";
        }
    }
}

// test

$carcons1 = new CarConstruct("BMW","BLEU") ;
echo $carcons1->afficheModel() ;
echo $carcons1->afficheColor() ;
$carcons1->model = "TESLA"; 

// va générer une erreur car $model est private
// pour modifier le modèle on utilise une méthode publique permettant de modifier l'attribut $model.


?>