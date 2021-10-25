<?php

class Piece{

    protected $taille;
    protected $nom;

    public function __set($attribut, $valeur){$this->$attribut = $valeur;}
    public function __get($attribut){return $this->$attribut;}

    public function affiche(){
        return $this->nom."<br>Taille : ".$this->taille."m²<br> et j'ai ".$this->objet."<br><hr>";
    } 
}

class Cuisine extends Piece{       
    protected $objet;

    public function __construct($nom,$taille,$objet){
        $this->nom = $nom;
        $this->taille = $taille;
        $this->objet = $objet;
    }
    public function __set($attribut, $valeur){$this->$attribut = $valeur;}
    public function __get($attribut){return $this->$attribut;}
    
}

class salledeBain extends Piece{
    protected $objet;
    
    public function __construct($nom,$taille,$objet){
        $this->nom = $nom;
        $this->taille = $taille;
        $this->objet = $objet;
    }
    public function __set($attribut, $valeur){$this->$attribut = $valeur;}
    public function __get($attribut){return $this->$attribut;}
    
}

class Chambre extends Piece{
    protected $objet;
    
    public function __construct($nom,$taille,$objet){
        $this->nom = $nom;
        $this->taille = $taille;
        $this->objet = $objet;
    }
    public function __set($attribut, $valeur){$this->$attribut = $valeur;}
    public function __get($attribut){return $this->$attribut;}
    
}

class Maison{

    private $nom;
    private $pieceCuisine;
    private $pieceSDB;
    private $pieceChambre;
    

    public function __set($attribut, $valeur){$this->$attribut = $valeur;}
    public function __get($attribut){return $this->$attribut;}
    public function __construct($nom){$this->nom=$nom;}
    public function affecterCuisineAMaison($nom,$taille,$objet){
        $this->pieceCuisine = new Cuisine ($nom,$taille,$objet);
        // $this->tPieces[$this->oPiece->taille] = $this->oPiece;
    }
    public function affecterSDBAMaison($nom,$taille,$objet){
        $this->pieceSDB = new salledeBain ($nom,$taille,$objet);
        // $this->tPieces[$this->oPiece->taille] = $this->oPiece;
    }
    public function affecterChambreAMaison($nom,$taille,$objet){
        $this->pieceChambre = new Chambre ($nom,$taille,$objet);
        // $this->tPieces[$this->oPiece->taille] = $this->oPiece;
    }

    public function superficie(){

        echo "superficie total de $this->nom : ".($this->pieceCuisine->taille + $this->pieceSDB->taille + $this->pieceChambre->taille)."m2"; 
        
    }
 }

$mamaison = new Maison("Ma maison");
echo "<hr />Nouvel maison : ", $mamaison->nom;

$mamaison->affecterCuisineAMaison("Cuisine","15","une Cuisine équipée");
echo "<hr />Nouvelle pièce : ", $mamaison->pieceCuisine->affiche();

$mamaison->affecterSDBAMaison("Salle de Bain","10","Un Jacuzzy");
echo "<hr />Nouvelle pièce : ", $mamaison->pieceSDB->affiche();

$mamaison->affecterChambreAMaison("Chambre1","12", "un lit king-size");
echo "<hr />Nouvelle pièce : ", $mamaison->pieceChambre->affiche();

$mamaison->affecterChambreAMaison("Chambre2","14", "un lit jumeaux");
echo "<hr />Nouvelle pièce : ", $mamaison->pieceChambre->affiche();

echo "<br>";
$mamaison->superficie();

?>