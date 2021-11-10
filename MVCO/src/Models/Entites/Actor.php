<?php

namespace cinema\Models\entites;

class Actor{
    private $id;
    private $prenom;
    private $nom;

    public function setNom($nom){
        $this->nom = $nom;
        return $this;
    }

    public function setid($id){
        $this->id = $id;
        return $this;
    }

    public function setPrenom($prenom){
        $this->prenom = $prenom;
        return $this;
    }

    public function getNom(){
        return $this->nom;
    }

    public function getPrenom(){
        return $this->prenom;
    }

    public function getId(){
        return $this->id;
    }

    public function addActor(){
        return $this->id;
        return $this->nom;
        return $this->prenom;
    }
}

?>