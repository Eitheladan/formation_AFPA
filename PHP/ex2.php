<?php 

// comment retourner les valeurs ENUM d'un champ de table

function ListeDesEnumeres($table,$champ) { 
  $bdd = new PDO('mysql:host=localhost;dbname=formation2','root','') ;
  $sql= "SHOW COLUMNS FROM $table LIKE '$champ'";
  $result= $bdd->query($sql) ;
  while($row = $result->fetch()) {
     list($field,$type,$null,$key,$default,$extra) = $row;
     list($junk,$type) = explode('(',$type);     
     list($type) = explode(')',$type);   
     $type = str_replace("'",'',$type);   
     $types = explode(',',$type);  
  }    
  foreach($types as $type) echo $type."<br>";    
  return $types; 
}

$roles = ListeDesEnumeres('utilisateur','role');
print_r($roles);

?>
<?php 

$bdd = new PDO('mysql:host=localhost;dbname=formation2','root','') ;
$email="ddd@ddd.fr";
$sql = 'SELECT * FROM utilisateur WHERE email= ?' ;
$result = $bdd->prepare($sql) ;
$result->execute(array($email)) ;

$row = $result->fetch() ;
echo $row['id']."<br>" ;
    echo $row['email']."<br>" ;
    echo $row['nom']."<br>" ;
    echo $row['prenom']."<br>" ;
    echo $row['tph']."<br>" ;
    echo $row['role']."<br>" ;
    echo "<a href=tphs.php?uid=".$row['id'].">saisie numeros téléphone</a>";
    echo "<hr>";

?>
<!-- tphs.php -->
<form action="ajoutetph.php" method="post">
<input type="text" name="tph"> 
<input type="hidden" name="uid" value=<?php echo $_GET['uid'] ;?> >
<input type="submit" value="ok">
</form>
<?php
// ajouttph.php. 

$bdd = new PDO('mysql:host=localhost;dbname=formation2','root','') ;
$sql = $bdd->prepare("INSERT INTO `telephone` (id_utilisateur,numero) VALUES (? , ?);") ;
$sql->execute(array($_POST['uid'],$_POST['tph'])) ; 

?>