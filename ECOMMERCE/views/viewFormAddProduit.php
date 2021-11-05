<?php include('_headerAdmin.php'); ?>

<center><h2>Création d'un nouveau produit</h2></center>
    
    <center>
        <table class="table table-primary table-striped table-over table-sm" style="width: 500px">
        <form action='ajouterUnProduit' method='post'>
        <tr>
                <td>Type : </td>
                <td>
                    <select name="type" id="type-select">
                        <option value="parfum">Parfum</option>
                        <option value="gel douche">Gel Douche</option>
                        <option value="maquillage">Maquillage</option>
                    </select>    
                </td>
            </tr>
            <tr>
                <td>Nom : </td>
                <td><input type="text" name="nom" size="50" maxlength="50"></td>
            </tr>
            <tr>
                <td>Prix : </td>
                <td><input type="text" name="prix" size="50" maxlength="50"></td>
            </tr>
            <tr>
                <td>quantite en stock : </td>
                <td><input type="text" name="quantite" size="50" maxlength="50"></td>
            </tr>
            <tr>
                <td>TVA :</td>
                <td>
                    <select name="id_tva" id="tva-select">
                        <option value="1">19.6</option>
                        <option value="2">5.5</option>
                    </select>    
            </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Envoyer"></td>
            </tr>
        </form>
        </table>
    </center>

    <?php include('_footerAdmin.php'); ?>