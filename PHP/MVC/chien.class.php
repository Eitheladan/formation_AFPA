<?php
class Chien {

    private $nom ;
    private $poid;

    public function __construct($nom,$poids){
    
    $this->nom = $nom;
    $this->poids = $poids;

    }

    public function getNom(){

        return $this->nom;
    }

    public function getPoids(){

        return $this->poids;
    }

    public function Aboie(){

        if($this->poids>50){

            return "WOOOOOOFF";
        }else if(($this->poids<=50) && ($this->poids>14)) {

            return "WAAAFFF";

        }else{

            return "WIIIIIIFFFF";
        }
    }

    public function affiche(){

        echo "Mon nom est : ".$this->nom." et je pèse ".$this->poids."Kg - ".$this->Aboie()." !!! <br><hr>";
    }


}



?>