<?php

session_start();


?>



<table>
    <thead>
        <tr>
            <td>REF_PRODUIT</td>
            <td>NOM</td>
            <td>PRIX</td>
            <td>QTE</td>
            <td>TOTAL</td>
        </tr>
    </thead>

<?php 

$bdd = new PDO("mysql:host=localhost;dbname=mon_e_commerce;charset=UTF8","root","");

$r = htmlspecialchars($_POST["r"]);
$l = htmlspecialchars($_POST["l"]);
$p = htmlspecialchars($_POST["p"]);
$q = htmlspecialchars($_POST["q"]);


echo($r);
echo($l);
echo($p);
echo($q);

echo ("<form action='pannier.php' method='POST'><tr><td><input id='text' name='r' readonly='readonly' type='text'value='".$r."'></input></td>");
echo ("<td><input id='text' type='text' readonly='readonly' name='l' value='".$l."'></input></td>");
echo ("<td><input id='text' type='prix' readonly='readonly' name='p' value='".$p."'>
</input></td><td><input id='qte' type='text' name='q' value='".$q."'></td><td><input id='text' type='prix' readonly='readonly' name='p' value='".($p*$q)."'></input></td></tr></form>");

?>
</table>
