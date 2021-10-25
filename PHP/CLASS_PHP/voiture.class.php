<?php
class Voiture{
    protected $modele;

    // public function __construct($modele){
    //     $this->modele = $modele;
    // }

    public function setModele($modele){
        $this->modele = $modele;
    }
    public function getModele(){
        return $this->modele;
    }
    public function Hello(){
        return "Hello Bip !!";
    }
}

class SportsVoiture extends Voiture{

    public function Hello(){

        return "Bip : ".$this->modele;
    }

}

$sp1 = new SportsVoiture();
$sp1->setModele("Ferrari");

echo $sp1->Hello();
?>