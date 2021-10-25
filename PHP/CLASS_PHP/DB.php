<?php 


class DB{


    // Datas accessible par this

    private $pdo;
    private $sql;

    public function __construct ($nombase, $user, $password) {
        try {
          $this->pdo = new PDO(
            "mysql:host=localhost;dbname=".$nombase.";charset=UTF8", $user, $password, 
            [
              PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
              PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]
          );
        } catch (Exception $ex) { exit($ex->getMessage()); }
      }

      public function vaChercher($requete,$condition=null){
        
            $this->sql = $this->pdo->prepare($requete);
            $this->sql->execute($condition);
            $resultat = $this->sql->fetchAll();
            return $resultat;        
      }

      public function vaInserer($requete,$data){

        $this->sql = $this->pdo->prepare($requete);
        $this->sql->execute($data);
      }


}
$testdb = new DB("formation","root","");

$lenonos = $testdb->vaChercher("SELECT * from adresse WHERE id=?",[39]); 
// echo "<pre>" ;
// var_dump($lenonos);
// echo "</pre>";

// var_dump($testdb);

echo "table Adresse :<br>";
foreach($lenonos as $k => $v) {
echo $v['id_utilisateur']." - ".$v['numero']." - ".$v['adresse1']." - ".$v['adresse2']." - ".$v['code_post']." - ".$v['ville']."<br>" ;

}

$testdb->vaInserer("INSERT INTO role (type) VALUE(?)", array('Fournisseur'));


?>