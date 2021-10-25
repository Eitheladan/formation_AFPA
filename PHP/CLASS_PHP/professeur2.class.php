<?php
class Professeur {

    private $id;
    private $nom;
    private $prenom;
    private $email;
    private $specialite = array();

//constructeur

public function __construct($id, $nom, $prenom, $email) {

    $this->id = $id ;
    $this->nom = $nom ;
    $this->prenom = $prenom ;
    $this->email = $email ;
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

public function addSpecialite($id, $code, $libelle){
    $this->specialite[] = new Specialite($id, $code, $libelle) ;
}

public function afficheSpecialite(){
    // $this->specialite[] = new Specialite($id, $code, $libelle) ;

    foreach($this->specialite as $value){

        $value->affiche();
    }
}

public function affiche(){
    return $this->nom." "
        .$this->prenom." ". $this->email ;
}
}


?>