<?php
class Professeur {

    private $id;
    private $nom;
    private $prenom;
    private $email;
    private $specialite;

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

public function setId($id){

    $this->id = $id ;
}

public function getNom(){

    return $this->nom ;
}

public function setNom($nom){

    $this->nom = $nom ;
}

public function getPrenom(){

    return $this->prenom ;
}

public function setPrenom($prenom){

    $this->prenom = $prenom ;
}

public function getEmail(){

    return $this->email ;
}

public function setEmail($email){

    $this->email = $email ;
}

public function getSpecialite(){

    return $this->specialite ;
}

public function setSpecialite($specialite){

    $this->specialite = $specialite ;
}


public function affiche(){


    return $this->nom." "
        .$this->prenom." ". $this->email ;
}
}


?>