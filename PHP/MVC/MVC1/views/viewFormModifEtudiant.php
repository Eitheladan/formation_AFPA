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
    <h2>Modification de l'étudiant</h2>
    <p></p>
        <table class="table table-primary table-striped table-over table-sm" style="width: 500px">
            
        <form action='../rqpMajEtudiant' method='post'>
            <tr><td>Prénom : </td><td><input type="text" name="prenom" size="50" maxlength="50" value="<?=$prenom?>"></td></tr>
            <tr><td>Nom : </td><td><input type="text" name="nom" size="50" maxlength="50" value="<?=$nom?>"></td></tr>
            <tr><td>Email : </td><td><input type="text" name="mail" size="50" maxlength="50" value="<?=$mail?>"></td></tr>
            <tr><td>Mot de passe : </td><td><input type="text" name="password" size="50" maxlength="50" value="<?=$password?>"></td></tr>
            <tr><td></td><td><input type="hidden" name="id" size="50" maxlength="50" value="<?=$id?>"><input type="submit" value="Modifier"></td></tr>
        </form>
        </table>
    </center>
<?php include('_footer.php') ?>
