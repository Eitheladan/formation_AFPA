<?php

class Car {
    // les attributs
    public $modele ;
    public $color ;
    public $energie;
    public $reservoir;
    //les méthodes
    public function hello(){
            return "bip bip";
    }

    public function rempli($litre){
        $this->reservoir = $litre;
    }
}

$auto1 = new Car();
$auto2 = new Car();

$auto1->modele = "citroen" ;
$auto2->modele = "VW" ;

echo $auto1->modele."<br>";
echo $auto1->hello()."<br>" ;
// j'execute la méthode hello() sur l'objet référencé par $auto1
// l'objet est l'instance d'une classe
// on peut voir une classe comme un moule qui va créer des objets.
$auto1->rempli(50);
echo $auto1->reservoir."<br>";
?>