<?php include('_header.php')  ?>
<style>
    body{margin-top:20px;
background:#ddd;
}

.link-p {
    display: block;
    min-height: 250px;
    height: auto;
    width: 100%;
    max-width: 100%;
    margin-right: auto;
    margin-left: auto;
}

/* TABLES */
.table {
    border-collapse: separate;
}
.table-hover > tbody > tr:hover > td,
.table-hover > tbody > tr:hover > th {
    background-color: #eee;
}
.table thead > tr > th {
	border-bottom: 1px solid #C2C2C2;
	padding-bottom: 0;
}
.table tbody > tr > td {
	font-size: 0.875em;
	background: #f5f5f5;
	border-top: 10px solid #fff;
	vertical-align: middle;
	padding: 12px 8px;
}
.table tbody > tr > td:first-child,
.table thead > tr > th:first-child {
	padding-left: 20px;
}
.table thead > tr > th span {
	border-bottom: 2px solid #C2C2C2;
	display: inline-block;
	padding: 0 5px;
	padding-bottom: 5px;
	font-weight: normal;
}
.table thead > tr > th > a span {
	color: #344644;
}
.table thead > tr > th > a span:after {
	content: "\f0dc";
	font-family: FontAwesome;
	font-style: normal;
	font-weight: normal;
	text-decoration: inherit;
	margin-left: 5px;
	font-size: 0.75em;
}
.table thead > tr > th > a.asc span:after {
	content: "\f0dd";
}
.table thead > tr > th > a.desc span:after {
	content: "\f0de";
}
.table thead > tr > th > a:hover span {
	text-decoration: none;
	color: #2bb6a3;
	border-color: #2bb6a3;
}
.table.table-hover tbody > tr > td {
	-webkit-transition: background-color 0.15s ease-in-out 0s;
	transition: background-color 0.15s ease-in-out 0s;
}
.table tbody tr td .call-type {
	display: block;
	font-size: 0.75em;
	text-align: center;
}
.table tbody tr td .first-line {
	line-height: 1.5;
	font-weight: 400;
	font-size: 1.125em;
}
.table tbody tr td .first-line span {
	font-size: 0.875em;
	color: #969696;
	font-weight: 300;
}
.table tbody tr td .second-line {
	font-size: 0.875em;
	line-height: 1.2;
}
.table a.table-link {
	margin: 0 5px;
	font-size: 1.125em;
}
.table a.table-link:hover {
	text-decoration: none;
	color: #2aa493;
}
.table a.table-link.danger {
	color: #fe635f;
}
.table a.table-link.danger:hover {
	color: #dd504c;
}

.table-products tbody > tr > td {
	background: none;
	border: none;
	border-bottom: 1px solid #ebebeb;
	-webkit-transition: background-color 0.15s ease-in-out 0s;
	transition: background-color 0.15s ease-in-out 0s;
	position: relative;
}
.table-products tbody > tr:hover > td {
	text-decoration: none;
	background-color: #f6f6f6;
}
.table-products .name {
	display: block;
	font-weight: 600;
	padding-bottom: 7px;
}
.table-products .price {
	display: block;
	text-decoration: none;
	width: 50%;
	float: left;
	font-size: 0.875em;
}
.table-products .price > i {
	color: #8dc859;
}
.table-products .warranty {
	display: block;
	text-decoration: none;
	width: 50%;
	float: left;
	font-size: 0.875em;
}
.table-products .warranty > i {
	color: #f1c40f;
}
.table tbody > tr.table-line-fb > td {
	background-color: #9daccb;
	color: #262525;
}
.table tbody > tr.table-line-twitter > td {
	background-color: #9fccff;
	color: #262525;
}
.table tbody > tr.table-line-plus > td {
	background-color: #eea59c;
	color: #262525;
}
.table-stats .status-social-icon {
	font-size: 1.9em;
	vertical-align: bottom;
}
.table-stats .table-line-fb .status-social-icon {
	color: #556484;
}
.table-stats .table-line-twitter .status-social-icon {
	color: #5885b8;
}
.table-stats .table-line-plus .status-social-icon {
	color: #a75d54;
}
</style>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container bootdey">
<div class="row bootstrap snippets">
    <div class="col-lg-3 col-md-3 col-sm-12">
       
    </div>
    <div class="clearfix visible-sm"></div>

    <!-- Cart -->
    <div class="col-lg-9 col-md-9 col-sm-12">
        <div class="col-lg-12 col-sm-12">
            <span class="title">PANIER</span>
        </div>
        <div class="col-lg-12 col-sm-12 hero-feature">
            <div class="table-responsive">
                <table class="table table-bordered tbl-cart">
                    <thead>
                        <tr>
                            <td class="hidden-xs"></td>
                            <td>Nom du Produit</td>                            
                            <td class="td-qty">Quantité</td>
                            <td>Prix HT</td>
                            <td>Prix TTC</td>
                            <td>Sous Total</td>
                            <td>Suppr.</td>
                        </tr>
                    </thead>
                    <tbody>

                    <?php
                        
                        foreach ($rqp as $row) {
                            $prixTTC = $row['prix']*$row['taux'];
                        ?>
                        <tr>
                            <td class="hidden-xs">
                                <a href="#">
                                    <img style="width:50px; height:50px;" src="<?=_BASE?>/views/image/<?= $row['image'] ?>.jpg" alt="<?= $row['nom'] ?>" title="" width="47" height="47">
                                </a>
                            </td>
                            <td><?= $row['nom'] ?></td>
                            <td><?= $row['quantite'] ?></td>
                            <td class="price"><?= round($row['prix'],2) ?></td>
                            <td class="price"><?= round($prixTTC,2) ?></td>
                            <td><?= round(($prixTTC)*($row['quantite']),2) ?></td>
                            <td class="text-center">
                                <form action="<?=_BASE?>/controllerPanier/delProduit" method="post">
                                    <input type="hidden" name="id_produit" value="<?=$row['id_produit']?>">
                                    <input type="submit" value="supprimer">
                                <a type="submite" class="remove_cart" rel="2">
                                    <i class="fa fa-trash-o"></i>
                                </a>
                                </form>
                            </td>
                        </tr>
                        <?php } ?>
                        
                        
                        <tr>
                            <td colspan="4" align="right">Total</td>
                            <td class="total" colspan="2"><b>$ 163.47</b>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="btn-group btns-cart">
                <a href="site_client.php"><button type="button" class="btn btn-primary"><i class="fa fa-arrow-circle-left"></i> Continuer Achat</button></a>
                <button type="button" class="btn btn-primary">MAJ Panier</button>
                <a href="<?=_BASE?>/controllerPanier/afficheValidePanier"><button type="button" class="btn btn-primary">Valider Panier <i class="fa fa-arrow-circle-right"></i></button></a>
            </div>

        </div>
    </div>
    <!-- End Cart -->
</div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>



<?php include('_footer.php') ?>