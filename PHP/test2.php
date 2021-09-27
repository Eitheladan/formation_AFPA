<?php 

$titre = "Mon super titre";
$x = 5 ;

/* echo "<h1>".$titre."</h1>"; */
?>

<h1><?php echo $titre; ?></h1>
<div><p><?php echo $x ; ?></p></div>

<?php
$txt = "W3Schools.com";
echo "I love $txt!"; /* equivalent à: echo "I love ".$txt */
?>

<?php
echo "<br>";
$x = 5 ;
echo "x:".$x."<br>" ;
$y = 12 ;
echo "y:".$y."<br>" ;
$z = $x + $y ;
echo "total:".$z."<br>";

function myTest() {
    global $x ;
    echo "myTest-> ";
    echo "variable ".$x ;
}

myTest();
echo "<br>";
echo "<br>";


$contenu = "chaine de caractere" ;
/* var_dump($contenu) ; */

function debug($val) {
    echo "<pre>";
    print_r($val);
    echo "</pre>";
}


$tableau = array("renault","citroen","volvo") ;
/* debug($tableau); */
echo "<ul>";
foreach ($tableau as $item) {
    echo "<li>".$item."</li>"; 
}
echo "</ul>";

?>