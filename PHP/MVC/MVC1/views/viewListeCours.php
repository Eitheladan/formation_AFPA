<?php include('_header.php')  ?>

    <h2 style="margin-top: 50px;">Affiche les cours</h2>
    
    <center>
        <table class="table table-primary table-striped table-over table-sm position-absolute top-50 start-50 translate-middle shadow p-3 mb-5 bg-body rounded" style="width: 700px">
            <thead>
                <tr>
                    <td>CODE</td>
                    <td>TITRE</td>
                    <td>LANGAGE</td>
                    <td></td>
                    <td></td>
                </tr>
            </thead>
        <?php
        foreach ($result as $element) {
        $id = $element['id'];
        $code=$element['code'];
        $titre=$element['titre'];
        $langage=$element['langage'];
        
        ?>
            <tr>
                <td><?=$code?></td>
                <td><?=$titre?></td>
                <td><?=$langage?></td>
                <td>
                    <a href="modifCours/<?=$id?>">
                    <button class="btn btn-success">Modifier</button>
                    </a>
                </td>
                <td>
                    <a href="lanceSupprCours/<?=$id?>">
                    <button class="btn btn-success">Supprimer</button>
                    </a>
                </td>
            </tr>
            
    
        <?php } ?>
        </table>
        <a href="<?=_BASE?>/controllerCours/formAjoutCours">
            <button class="btn btn-primary btn-lg">Ajouter Cours</button>
        </a>
    </center>

    <?php include('_footer.php') ?>