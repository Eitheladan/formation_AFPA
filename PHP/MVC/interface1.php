<?php

interface Inflammable {
    public function enflammer();
}

interface Flottable {

    public function flotter();
}

class Bois implements Inflammable, Flottable{
    public function enflammer(){
        echo "Je suis de la class ".__CLASS__." Je brûle et ça fait des braises.<hr>";
    }

    public function flotter()
    {
        echo "Je suis de la class ".__CLASS__." Si je suis dans l'eau je flotte !<hr>";
    }
}

class Dancefloor implements Inflammable {
    public function enflammer(){
        echo "Je suis de la class ".__CLASS__." Je danses sur les planches et je m'emflamme<hr>";
    }
}

Class Essence {
    public function enflammer()
    {
        echo "Je suis de la class ".__CLASS__." Je m'enflamme pour un rien !<hr>";
    }
}

$bois = new Bois ();
$bois->flotter();
$dancefloor = new Dancefloor ();
$essence = new Essence ();

$Inflammable[] = $bois ;
$Inflammable[] = $dancefloor ;
$Inflammable[] = $essence ;

// var_dump($Inflammable);

foreach($Inflammable as $element){
    $element->enflammer();
}

$Inflammable[0]->enflammer();
$Inflammable[1]->enflammer();
$Inflammable[2]->enflammer();
?>