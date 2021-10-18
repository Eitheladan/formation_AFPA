<?php
class K7audio{

    private $nom_groupe ;
    private $titre_album ;
    private $durée ;

    public function __construct($nom_groupe,$titre_album,$durée){
        $this->nom_groupe = $nom_groupe ;
        $this->titre_album = $titre_album ;
        $this->durée = $durée ;
    }

    public function getNom_groupe(){
        return $this->nom_groupe ;
    }

    public function setNom_groupe(){
        $this->nom_groupe = $nom_groupe;
    }


    public function getTitre_album(){
        return $this->titre_album ;
    }

    public function setTitre_album(){
        $this->Titre_album = $titre_album;
    }

    public function getDurée(){
        return $this->durée ;
    }

    public function setDurée(){
        $this->titre_album = $durée;
    }

}

?>