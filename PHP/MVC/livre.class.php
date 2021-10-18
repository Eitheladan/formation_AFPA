<?php
// création de la class livre
class Livre {

    // attributs
    // $auteur (plusieur auteur pour un livre)
    // $titre du livre
    // $prix
    private $auteur = array();
    private $titre;
    private $prix;

    public function __construct($titre,$prix){        
        $this->titre = $titre;
        $this->prix = $prix;
    }

    public function setAuteur($auteur){

        $this->auteur = $auteur;
    }

    public function getAuteur(){

        return $this->auteur;
    }

    public function setTitre($titre){

        $this->titre = $titre;
    }

    public function getTitre(){

        return $this->titre;
    }
    public function setPrix($prix){

        $this->prix = $prix;
    }

    public function getPrix(){

        return $this->prix;
    }

    public function addAuteur($nom, $email){
        $this->auteur[] = new Auteur($nom,$email) ;
    }

    public function afficheLivre(){
        return $this->titre." ". $this->prix ;
    }
}


// utilisation des classes pour créer un livre qui a plusieurs auteurs

?>