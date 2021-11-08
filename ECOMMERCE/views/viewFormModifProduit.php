<?php include('_headerAdmin.php'); ?>


<?php
        foreach ($rqp as $element) { 
        $id_produit= $element['id_produit'];
        $type = $element['type'];
        $nom=$element['nom'];
        $prix=$element['prix'];
        $quantite=$element['quantite'];
        $id_tva=$element['id_tva'];
        $image=$element['image'];
        }

        var_dump($element['id_produit']);
        ?>

<center><h2>Modif produit</h2></center>    
    <center>
        <table class="table table-primary table-striped table-over table-sm" style="width: 500px">
        <form action="<?=_BASE?>/controllerProduit/rqpMajProduit/<?=$id_produit?>" method='post'>
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
                <td><input type="text" name="nom" size="50" maxlength="50" value="<?=$nom?>"></td>
            </tr>
            <tr>
                <td>Prix : </td>
                <td><input type="text" name="prix" size="50" maxlength="50" value="<?=$prix?>"></td>
            </tr>
            <tr>
                <td>quantite en stock : </td>
                <td><input type="text" name="quantite" size="50" maxlength="50" value="<?=$quantite?>"></td>
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
                <td><input type="submit" value="Envoyer"><input type="hidden" value="<?=$id_produit?>" name="id_produit"></td>
            </tr>
        </form>
        </table>
    </center>

    <?php include('_footerAdmin.php'); ?>