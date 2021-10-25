<?php
class Animal{
    protected $nom;
    protected $image;

    public function setNom($nom){
        $this->nom = $nom;
    }

    public function setImage($Image){
        $this->image = $Image;
    }

    public function faitBruit(){

        return "je fais ".$this->faitbruit;

    }

    public function Mange(){

        return "je mange ".$this->Nourriture;

    }

    public function Dors(){

        return "Class : ".__CLASS__." : je dors bien";

    }

    public function Cri(){

        return "Le cri : ".$this->cri;

    }
}
?>