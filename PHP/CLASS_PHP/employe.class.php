<?php
class Employe{

    private $nom;
    private $departement;


    public function __construct($nom,$departement){

        $this->nom = $nom;
        $this->departement = $departement;
    }

    public function getNom(){
        return $this->nom;
    }

    public function getDepartement(){
        return $this->departement;
    }
}

class Directeur extends Employe{

    public $spec = "patron";

}


$d = new Directeur ("Martin","Compta");

echo $d->getNom();
echo $d->getDepartement();
echo $d->spec;


?>


