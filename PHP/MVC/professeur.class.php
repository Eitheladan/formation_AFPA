<?php
class Professeur {

    private $id;
    private $nom;
    private $prenom;
    private $email;
    private $specialite;



//constructeur

public function __construct($id, $nom, $prenom, $email, $specialite) {

    $this->id = $id ;
    $this->nom = $nom ;
    $this->prenom = $prenom ;
    $this->email = $email ;
    $this->specialite = $specialite ;
}

//accesseurs (get et set variable)

public function getId(){

    return $this->id ;
}

public function setId(){

    $this->id = $id ;
}

public function getNom(){

    return $this->nom ;
}

public function setNom(){

    $this->nom = $nom ;
}

public function getPrenom(){

    return $this->prenom ;
}

public function setPrenom(){

    $this->prenom = $prenom ;
}

public function getEmail(){

    return $this->email ;
}

public function setEmail(){

    $this->email = $email ;
}

public function getSpecialite(){

    return $this->specialite ;
}

public function setSpecialite(){

    $this->specialite = $specialite ;
}


public function affiche(){


    return $this->nom." "
        .$this->prenom." ". $this->email ;
}
}


?>