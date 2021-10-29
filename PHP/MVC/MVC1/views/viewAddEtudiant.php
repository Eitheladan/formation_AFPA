<?php include('_header.php')  ?>

    <center><h2>Création d'un nouveau compte étudiant</h2></center>
    
    <center>
        <table class="table table-primary table-striped table-over table-sm" style="width: 500px">
        <form action='ajouterUnEtudiant' method='post'>
            <tr><td>Prénom : </td><td><input type="text" name="prenom" size="50" maxlength="50"></td></tr>
            <tr><td>Nom : </td><td><input type="text" name="nom" size="50" maxlength="50"></td></tr>
            <tr><td>Email : </td><td><input type="text" name="mail" size="50" maxlength="50"></td></tr>
            <tr><td>Mot de passe : </td><td><input type="text" name="password" size="50" maxlength="50"></td></tr>
            <tr><td></td><td><input type="submit" value="Envoyer"></td></tr>
        </form>
        </table>
    </center>

</html>