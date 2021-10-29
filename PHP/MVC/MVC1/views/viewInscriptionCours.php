<?php include('_header.php')  ?>

<?php
    foreach ($req as $element) {    
        $id = $element['id_etudiant'];
        $prenom=$element['prenom'];
        $nom=$element['nom'];
        $mail=$element['mail'];
        $password=$element['password'];
    }
        ?>
    
    <center>
    <h2>Inscription Cours</h2>   
        <table>            
                <tr><td><h3><?=$prenom?> <?=$nom?></h3> </td></tr>                
                <tr><td><input type="hidden" name="mail" size="50" disabled readonly maxlength="50" value="<?=$mail?>"></td></tr>            
        </table>
    </center>    
    <center>
    <form action='../rqpInscription' method='post'>
        <table class="table table-primary table-striped table-over table-sm" style="width: 500px">
            <thead><tr><td>Code</td><td>Titre</td><td>Langage</td><td></td></tr></thead>
            
            <input type="hidden" name="id" size="50" maxlength="50" value="<?=$id?>">
                <?php
                    foreach($result as $row) {
                    $id2 = $row['id'];
                    $code=$row['code'];
                    $titre=$row['titre'];
                    $langage=$row['langage'];        
                    ?>        
                        <tr>
                            <td class='cours'><?=$code?></td>
                            <td class='cours'><?=$titre?></td>
                            <td class='cours'><?=$langage?></td>
                            <td class='cours'>    
                                <input name="cours[]" class="form-check-input" type="checkbox" value="<?=$id2?>" id="flexCheckDefault">
                            </td>
                        </tr>
                    <?php } ?>
                                   
        </table>
       
        <div class='bouton'><input type="submit" value="Inscription"></div>
        </form>  
    </center>

    <?php include('_footer.php') ?>