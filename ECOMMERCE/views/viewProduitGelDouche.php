<?php include('_header.php')  ?>

<?php

if(isset($_GET["message"])){
    echo "<center style='bottom: 100px;'><h1 class='erreur'> L'article n'est plus en stock</h1></center>";
}

?>

        <!-- Section-->
        <section class="py-5">
        
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    

                        <?php
                        foreach ($rqp as $row)
                        {  
                        ?>
                            <form action="<?=_BASE?>/controllerPanier/addPanier" method="post">    
                            <div class="col mb-5" style="width: 260px; height: 500px">
                                <div class="card h-100" style="width: 260px; height: 500px">                            
                                    <!-- Product image-->
                                    <img class="card-img-top" style="width:250px; height:250px;" src="<?=_BASE?>/views/image/<?= $row['image'] ?>.jpg" alt="..." />
                                    <!-- Product details-->
                                    <div class="card-body p-4">
                                        <div class="text-center">
                                            <!-- Product name-->
                                            <h5 class="fw-bolder"><?= $row['nom'] ?></h5>
                                            <!-- Product reviews-->
                                            <div class="d-flex justify-content-center small text-warning mb-2">
                                                <div class="bi-star-fill"></div>
                                                <div class="bi-star-fill"></div>
                                                <div class="bi-star-fill"></div>
                                                <div class="bi-star-fill"></div>
                                                <div class="bi-star-fill"></div>
                                                <input type="hidden" value="<?=$row['id_produit']?>" name="id_produit">
                                            </div>
                                            <!-- Product price-->
                                            <?= $row['prix'] ?> €
                                        </div>
                                    </div>
                                    <!-- Product actions-->
                                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <?php if(isset($_SESSION['nom'])){
                                        if($row['quantite']>0){ ?>
                                        <div class="text-center"><input class="btn btn-outline-dark mt-auto" type="submit" value="Ajout Panier" name="submit"></div>
                                    <?php }else{ ?>
                                        <center><div style='color: red; font-weight:bolder;'>Plus de stock</div></center>
                                        <?php }
                                    } ?>
                                    </div>
                                </div>
                            </div>
                            </form>
                        <?php } ?>                        
                    
                </div>
            </div>
                    
            
        </section>
        <br>
        <br>
        
<?php include('_footer.php') ?>