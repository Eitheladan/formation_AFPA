<?php
require_once ('Models/modelHistorique.php');

function afficheAllHistoriques(){

    $req = selectAllHistoriques();
    
    require_once ('views/viewHistoriques.php');
}

function afficheUneCommande($id_commande){

    $req = SelectUneCommande($id_commande);
    require_once('views/viewUneCommande.php');
}

?>