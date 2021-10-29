<?php include('_header.php')  ?>

    <center>
    
    
        <?php
        $tmp=false; 
        foreach ($result as $element) {    
            $id = $element['id_etudiant'];
            $prenom=$element['prenom'];
            $nom=$element['nom'];
            $code=$element['code'];
            $titre=$element['titre'];
            $langage=$element['langage'];
               
            if ($tmp!=$id){
                $tmp = $id;
        ?>
        
        
        <table class="table table-danger table-striped table-over table-sm" style="width: 500px">
        <h5>Planing de <?=$prenom?> <?=$nom?></h5>
            <thead><tr><td>Code</td><td>Titre</td><td>Langage</td></tr></thead>
            <?php } ?>
            <tr>
                <td><?=$code?></td>
                <td><?=$titre?></td>
                <td><?=$langage?></td>                
            </tr> 
         <?php } ?>
        </table>
        <table style="height: 150px;"></table>
        
    </center>

    <?php include('_footer.php')  ?>