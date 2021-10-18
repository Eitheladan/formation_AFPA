<?php include('_header.php')  ?>

        <!-- Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    

                        <?php
                        $bdd = new PDO('mysql:host=localhost;dbname=mon_e_commerce;charset=UTF8','root','') ;
                        $bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

                        $req="SELECT * FROM produit";
                        $rqp_prod=$bdd->prepare($req);
                        $rqp_prod->execute(array());
                        while ($row=$rqp_prod->fetch()) {  
                        ?>
                    <form action="_panier.php" method="post">    
                    <div class="col mb-5">
                        <div class="card h-100">                            
                            <!-- Product image-->
                            <img class="card-img-top" style="width:250px; height:250px;" src="image/<?= $row['img'] ?>" alt="..." />
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
                                    <?= $row['prix_unitaire'] ?> €
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><input class="btn btn-outline-dark mt-auto" type="submit" value="Ajout Panier" name="submit"></div>
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