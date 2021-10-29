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
    <h2>Planning Etudiants</h2>
    <p></p>
        <table class="table table-danger table-striped table-over table-sm" style="width: 500px">            
                <tr>
                    <td>Prénom : </td>
                    <td><input type="text" name="prenom" size="50" disabled readonly maxlength="50" value="<?=$prenom?>"></td>
                </tr>
                <tr>
                    <td>Nom : </td>
                    <td><input type="text" name="nom" size="50" disabled readonly maxlength="50" value="<?=$nom?>"></td>
                </tr>
                <tr>
                    <td>Email : </td>
                    <td><input type="text" name="mail" size="50" disabled readonly maxlength="50" value="<?=$mail?>"></td>
                </tr>
            
        </table>
    </center>
    <center>
        <table class="table table-danger table-striped table-over table-sm" style="width: 500px">
            <thead><tr><td>Code</td><td>Titre</td><td>Langage</td><td></td></tr></thead>
        <?php
        foreach($result as $row) {
        $id2 = $row['id'];
        $code=$row['code'];
        $titre=$row['titre'];
        $langage=$row['langage'];        
        ?>
        <form action='../rqpInscription' method='post'>
            <tr>
                <td class='cours'><?=$code?></td>
                <td class='cours'><?=$titre?></td>
                <td class='cours'><?=$langage?></td>
                <td class='cours'>
                    <input type="hidden" name="id" size="50" maxlength="50" value="<?=$id?>">
                    <input type="hidden" name="id2" size="50" maxlength="50" value="<?=$id2?>">
                    <input type="submit" value="Supprimer">
                </td>
            </tr>
        </form>
        <?php } ?>
        
        </table>
    </center>

</html>