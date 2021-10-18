<?php
class Voiture {
    private $id ;
    private $marque ;
    private $vitesse ;
    private $puissance ;

    public function __construct($id,$marque,$vitesse,$puissance){
    
    $this->id = $id;
    $this->marque = $marque;
    $this->vitesse = $vitesse;
    $this->puissance = $puissance;

    }
    public function getId(){

        return $this->id ;
    }

    public function getMarque(){

        return $this->marque ;
    }

    public function getVitesse(){

        return $this->vitesse ;
    }

    public function getPuissance(){

        return $this->puissance ;
    }

    public function __toString(){
        return $this->id ;
        return $this->marque ;
        return $this->vitesse ;
        return $this->puissance ;
    }

    public function afficheVoiture(){
        return $this->id."<br>".$this->marque."<br>".$this->vitesse."<br>".$this->puissance;        
    }    
}

$voiture1 = new Voiture ("1","Peugeot","120km/h","90cv") ;
echo $voiture1->afficheVoiture() ;
?>