<?php include('_header.php')  ?>

    
    
    <center>
    <h2>Affiche les étudiants</h2>
        <table class="table table-primary table-striped table-over table-sm" style="width: 1000px;">
            <thead>
                <tr>
                    <td>Prenom</td>
                    <td>Nom</td>
                    <td>Mail</td>                    
                    <td colspan="4"></td>
                </tr>
        </thead>
        <?php
        foreach ($result as $element) {    
        $id = $element['id_etudiant'];
        $prenom=$element['prenom'];
        $nom=$element['nom'];
        $mail=$element['mail'];
        $password=$element['password'];
        ?>
            <tr>
                <td><?=$prenom?></td>
                <td><?=$nom?></td>
                <td><?=$mail?></td>                
                <td>
                    <a href="<?=_BASE?>/controllerEtudiant/modifEtudiant/<?=$id?>"><button>Modifier</button></a>
                </td>
                <td>
                    <a href="<?=_BASE?>/controllerInscription/afficheInscriptionCours/<?=$id?>"><button>Inscription</button></a>
                </td>
                <td>
                    <a href="<?=_BASE?>/controllerInscription/affichePlaningEtudiant/<?=$id?>"><button>Planing</button></a>
                </td>
                <td>
                    <a href="<?=_BASE?>/controllerEtudiant/lanceSupprEtudiant/<?=$id?>"><button>Supprimer</button></a>
                </td>
            </tr>
            
    
        <?php } ?>
        </table>
        <a id="bouton" href="<?=_BASE?>/controllerEtudiant/formAjoutEtudiant"><button>Ajouter Etudiant</button></a>
    </center>

    <?php include('_footer.php') ?>