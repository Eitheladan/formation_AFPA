<?php

class Specialite {

    private $id;
    private $code;
    private $libelle;



public function __construct($id, $code, $libelle){
    $this->id = $id ;
    $this->code = $code ;
    $this->libelle = $libelle ;
}

public function getId(){
    return $this->id ;
}

public function setId(){
    $this->id = $id ;
}

public function getCode(){
    return $this->code ;
}

public function setCode(){
    $this->id = $code ;
}

public function getLibelle(){
    return $this->libelle ;
}

public function setLibelle(){
    $this->id = $libelle ;
}

public function affiche(){
    echo $this->id." : ".$this->code." : ".$this->libelle."<br>" ;
}

}

//test

// $spec1 = new Specialite (1,"POO1","Java");
// $spec2 = new Specialite (1,"POO2","Smalltalk");
// $spec2->affiche();
// $spec1->affiche();

?>