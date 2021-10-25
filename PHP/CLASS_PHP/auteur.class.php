<?php 

class Auteur{

    private $nom;
    private $email;

    // constructeur
    // accesseurs uniquement get

public function __construct($nom,$email){
    $this->nom = $nom;
    $this->email = $email;
}

public function getNom(){
    return $this->nom;
}

public function getEmail(){
    return $this->email;
}

public function addLivre($titre, $prix){
    $this->livre[] = new Livre($titre,$prix) ;
}

public function afficheAuteur(){
    return $this->nom." ".$this->email;
}
}


?>