<?php
class Rectangle{

    private $longueur ;
    private $largeur ;

    public function __construct($longueur,$largeur){
        $this->longueur=$longueur;
        $this->largeur=$largeur;
    }

    public function getLongueur(){

        return $this->longueur;
    }

    public function getLargeur(){

        return $this->largeur;
    }

    public function Perimetre(){

        return 2*($this->longueur+$this->largeur);
    }
    public function Aire(){

        return ($this->longueur*$this->largeur);

    }

    public function Carre(){

        if($this->longueur==$this->largeur){

            return "C'est un carré";
        }else{

            return "Ce n'est pas un carré";
        }
    }

    public function __toString(){

        return "Longueur : ".$this->longueur." - Largeur : ".$this->largeur." - Perimètre : ".$this->Perimetre()." - Aire : ".$this->Aire()." - ".$this->Carre() ;
    }

    
}


$rectangle1 = new Rectangle (12.6,5.3);
$rectangle2 = new Rectangle (3.0,3.0);
$rectangle3 = new Rectangle (10.5,5.0);

echo $rectangle1->__toString()."<br><tr><br>";
echo $rectangle2->__toString()."<br><tr><br>";
echo $rectangle3->__toString()."<br><tr><br>";
?>