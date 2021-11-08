<?php 
 if ($_SESSION['id']!=$id AND ($_SESSION['role']!=1)){
 header('location:'._BASE.'/controllerUser/afficheAccueilClient');
}else{
    if($_SESSION['role']==1){
        include('_headerAdmin.php');
    }else{
        include('_header.php');        
    }   
?>

<?php
    foreach ($req as $element) {    
        $id = $element['id_user'];
        $prenom=$element['prenom'];
        $nom=$element['nom'];
        $mail=$element['mail'];
        $password=$element['password'];
        $role=$element['id_role'];        
    }    
?>
    
    <center>
    <h2>Modification client</h2>
    <p></p>
        <table class="table table-primary table-striped table-over table-sm" style="width: 500px">
            
        <form action='../rqpMajUser' method='post'>
            <tr><td>Prénom : </td><td><input type="text" name="prenom" size="50" maxlength="50" value="<?=$prenom?>"></td></tr>
            <tr><td>Nom : </td><td><input type="text" name="nom" size="50" maxlength="50" value="<?=$nom?>"></td></tr>
            <tr><td>Email : </td><td><input type="text" name="mail" size="50" maxlength="50" value="<?=$mail?>"></td></tr>
            <tr><td>Mot de passe : </td><td><input type="text" name="password" size="50" maxlength="50" value=""></td></tr>
            <?php
            if($_SESSION['role']==1){
            ?>
            <tr>
                <td>Role :</td>
                <td>
                    <select name="role" id="select_role">
                        <option value="1">Admin</option>
                        <option selected="selected" value="2">Client</option>
                    </select>
                </td>
            </tr>
            <?php } ?>
            <tr><td></td><td><input type="hidden" name="id" size="50" maxlength="50" value="<?=$id?>"><input type="submit" value="Modifier"></td></tr>
        </form>
        </table>
    </center>
<?php }
include('_footer.php') ?>
