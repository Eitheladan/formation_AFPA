<?php include('_header.php')  ?>
    <center>
    <h2>Modification cours</h2>
    </center>
<?php
    foreach ($req as $element) {    
        $id = $element['id'];
        $code=$element['code'];
        $titre=$element['titre'];
        $langage=$element['langage'];
    }
?>
    
    <center>
        <table class="table table-primary table-striped table-over table-sm" style="width: 600px">
            
        <form action='../rqpMajCours' method='post'>
            <tr><td>Prénom : </td><td><input type="text" name="code" size="50" maxlength="50" value="<?=$code?>"></td></tr>
            <tr><td>Nom : </td><td><input type="text" name="titre" size="50" maxlength="50" value="<?=$titre?>"></td></tr>
            <tr><td>Email : </td><td><input type="text" name="langage" size="50" maxlength="50" value="<?=$langage?>"></td></tr>
            <tr><td></td><td><input type="hidden" name="id" size="50" maxlength="50" value="<?=$id?>"><input type="submit" value="Valider"></td></tr>
        
        </table>
    </center>
    

    <?php include('_footer.php')  ?>