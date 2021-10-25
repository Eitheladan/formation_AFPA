<?php

class Docteur {

    private $nom;
    private $email;
    private $spec;

    public function __construct($nom){
        $this->nom = $nom;
    }

    public function getNom(){
        return $this->nom;
    }

    public function Traite_patient(){
        return "En cours de traitement";
    }
}

class Generaliste extends Docteur{

    public function Visite(){
        return "en visite";
    }
}

class Chirurgien extends Docteur{

    public function Insision(){
        return "En opération au bloc";
    }
}


$d1 = New Generaliste ("Bob");
$d2 = New Chirurgien ("Franck");

echo $d1->getNom()." - ".$d1->Traite_patient()." : ".$d1->Visite()."<br>";
echo $d2->getNom()." - ".$d2->Traite_patient()." : ".$d2->Insision();

?>