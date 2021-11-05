<?php include('_headerAdmin.php')  ?>

    <center>
    <h2>Affiche les étudiants</h2>
        <table class="table table-primary table-striped table-over table-sm" style="width: 1000px;">
            <thead>
                <tr>
                    <td>Nom</td>
                    <td>Prenom</td>
                    <td>Mail</td>
                    <td colspan="3"></td>                   
                </tr>
        </thead>
        <?php
        foreach ($req as $element) {    
        $id = $element['id_user'];
        $prenom = $element['prenom'];
        $nom=$element['nom'];
        $mail=$element['mail'];        
        ?>
            <tr>
                <td><?=$nom?></td>
                <td><?=$prenom?></td>
                <td><?=$mail?></td>                
                <td>
                    <a href="<?=_BASE?>/controllerUser/modifUser/<?=$id?>"><button>Modifier</button></a>
                </td>
                <td>
                    <a href="<?=_BASE?>/controllerUser/lanceSupprUser/<?=$id?>"><button>Supprimer</button></a>
                </td>
            </tr>
            
    
        <?php } ?>
        </table>       
    </center>

    <?php include('_footerAdmin.php') ?>