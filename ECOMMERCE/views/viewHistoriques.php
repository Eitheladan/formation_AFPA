<?php include('_header.php')  ?>

    <center>
    <h2>Historique de vos commandes</h2>
        <table class="table table-primary table-striped table-over table-sm" style="width: 1000px;">
            <thead>
                <tr>
                    <td>DATE</td>                   
                    
                    <td></td>                    
                </tr>
        </thead>
        <?php
        foreach ($req as $element) {
        $id = $element['id_commande'];
        $date = $element['date'];
        ?>
            <tr>
                <td><?=$date?></td>                
                
                               
                <td>
                    <a href="<?=_BASE?>/controllerHistorique/afficheUneCommande/<?=$id?>"><button>Consulter</button></a>
                </td>
                
            </tr>
            
    
        <?php } ?>
        </table>       
    </center>

    <?php include('_footerAdmin.php') ?>