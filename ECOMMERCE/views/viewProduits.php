<?php include('_headerAdmin.php')  ?>

    <center>
    <h2>Affiche les étudiants</h2>
        <table class="table table-primary table-striped table-over table-sm" style="width: 1000px;">
            <thead>
                <tr>
                    <td>Type</td>
                    <td>Nom</td>
                    <td>Prix</td>
                    <td colspan="2"></td>                    
                </tr>
        </thead>
        <?php
        foreach ($rqp as $element) {
        $id = $element['id_produit'];   
        $type = $element['type'];
        $nom=$element['nom'];
        $prix=$element['prix'];
        $quantite=$element['quantite'];
        $id_tva=$element['id_tva'];
        $image=$element['image'];
        ?>
            <tr>
                <td><?=$type?></td>
                <td><?=$nom?></td>
                <td><?=$prix?></td>
                               
                <td>
                    <a href="<?=_BASE?>/controllerProduit/afficheModifProduit/<?=$id?>"><button>Modifier</button></a>
                </td>
                <td>
                    <a href="<?=_BASE?>/controllerProduit/lanceSupprProduit/<?=$id?>"><button>Supprimer</button></a>
                </td>
            </tr>
            
    
        <?php } ?>
        </table>       
    </center>

    <?php include('_footerAdmin.php') ?>