<?php include('_header.php')  ?>
    
    
    
    <center>
    <h2 style="margin-top: 250px">Création d'un nouveau cours</h2>
        <table class="table table-primary table-striped table-over table-sm position-absolute top-50 start-50 translate-middle shadow p-3 mb-5 bg-body rounded" style="width: 400px">
        <form action='ajouterUnCours' method='post'>
            <tr><td>Code : </td><td><input type="text" name="code" size="50" maxlength="50"></td></tr>
            <tr><td>Titre : </td><td><input type="text" name="titre" size="50" maxlength="50"></td></tr>
            <tr><td>Langage : </td><td><input type="text" name="langage" size="50" maxlength="50"></td></tr>
            <tr><td></td><td><input type="submit" value="Envoyer"></td></tr>
        </form>
        </table>
    </center>

</html>

<?php include('_footer.php');  ?>