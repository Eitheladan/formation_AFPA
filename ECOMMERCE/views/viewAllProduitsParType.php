<?php include('_header.php')  ?>

<?php

if(isset($_GET["message"])){
    echo "<center style='bottom: 100px;'><h1 class='erreur'> L'article n'est plus en stock</h1></center>";
}

?>

<style>

body{
    background-color: white;
    }
</style>

        <!-- Section-->
        <section class="py-5">
        
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    

                        <?php
                        // parcours ma table produit pour récupérer les informations pour l'affichage
                        foreach ($rqp as $row)
                        {  
                        ?>
                            <form action="<?=_BASE?>/controllerPanier/addPanier" method="post">    
                            <div class="col mb-5" style="width: 260px; height: 500px">
                                <div class="card h-100" style="width: 260px; height: 500px">                            
                                    <!-- Product image-->
                                    <a type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight<?=$row['id_produit']?>" aria-controls="offcanvasRight" href="#"><img class="card-img-top" style="width:250px; height:250px;" src="<?=_BASE?>/views/image/<?= $row['image'] ?>.jpg" alt="..." /></a>
                                    <!-- Product details-->
                                    <div class="card-body p-4">
                                        <div class="text-center">
                                            <!-- Product name-->
                                            <h5 class="fw-bolder">
                                                <?php if($row['id_type']=="1"){?>
                                                    Inspiré de <br>
                                                    <?php } ?> <?= $row['nom'] ?></h5>
                                            <!-- Product reviews-->
                                            <div class="d-flex justify-content-center small text-warning mb-2">
                                               <?php if($row['stat']>0){ ?>
                                                <div class="bi-star-fill"></div>
                                                   <?php if($row['stat']>=40 ){?>
                                                    <div class="bi-star-fill"></div>
                                                       <?php if($row['stat']>=60 ){?>
                                                        <div class="bi-star-fill"></div>
                                                           <?php if($row['stat']>=80 ){?>
                                                            <div class="bi-star-fill"></div>
                                                               <?php if($row['stat']=100 ){?>
                                                                <div class="bi-star-fill"></div>
                                                                <?php }else{ ?>
                                                                    <div class="bi-star"></div>
                                                                    <?php }
                                                             }else{ ?>
                                                                <div class="bi-star"></div>
                                                                <div class="bi-star"></div>
                                                                <?php  }
                                                         }else{ ?>
                                                            <div class="bi-star"></div>
                                                            <div class="bi-star"></div>
                                                            <div class="bi-star"></div>
                                                            <?php   }
                                                 }else{ ?>
                                                    <div class="bi-star"></div>
                                                    <div class="bi-star"></div>
                                                    <div class="bi-star"></div>
                                                    <div class="bi-star"></div>
                                                    <?php  }
                                            }else{ ?>
                                                <div class="bi-star"></div>
                                                <div class="bi-star"></div>
                                                <div class="bi-star"></div>
                                                <div class="bi-star"></div>
                                                <div class="bi-star"></div>
                                            <?php } ?>
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
                                        <div class="text-center"><input class="btn btn-outline-dark mt-auto" type="submit" data-toggle="modal" data-target="#popup<?=$row['id_produit']?>" value="Ajout Panier" name="submit"></div>
                                    <?php }else{ ?>
                                        <center><div style='color: red; font-weight:bolder;'>Plus de stock</div></center>
                                        <?php }
                                    } ?>
                                    </div>
                                </div>
                            </div>
                            </form>
                            <!-- Pop-up consultation produit -->
                            <div slyle="width: 100%;" id ="details<?=$row['id_produit']?>" class="modal fade" aria-hidden="true">
                                <div  class="modal-dialog modal-xxl" style="width: 100%;">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5><?=$row['nom']?></h5>
                                        </div>
                                        <div class="modal-body">
                                            <div class="container-fluid">
                                                <div class="row">
                                                <div class="col-md-4">
                                                    <img style="width:250px; height:250px;" src="<?=_BASE?>/views/image/<?= $row['image'] ?>.jpg" alt="..." />
                                                </div>
                                                <div class="col-md-4 ms-auto"></div>
                                                </div>                                                
                                                <div class="row">
                                                <div class="col-md-6 ms-auto"><input type="number" name="quantite" id=""></div>
                                                </div>                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>                        
                            </div>
                            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight<?=$row['id_produit']?>" aria-labelledby="offcanvasRightLabel">
                                            <div class="offcanvas-header">
                                            <h5><?=$row['nom']?></h5>
                                                
                                            </div>
                                            <div class="offcanvas-body">
                                                ...
                                            </div>
                                            </div>

                            <!-- Pop-up de validation ajout produit panier -->
                            <div id="popup<?=$row['id_produit']?>" class="modal fade">
                                <div class="modal-dialog modal-sm modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 style="color: green;"><i class="fas fa-check"></i>Le produit a bien été ajouté à votre panier</h5>
                                        </div>
                                        <div class="modal-body">
                                            <img class="card-img-top" style="width:125px; height:125px;" src="<?=_BASE?>/views/image/<?= $row['image'] ?>.jpg" alt="..." />
                                            <h5 class="fw-bolder"><?= $row['nom'] ?></h5>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Continuer mes achats</button>
                                            <a href="<?=_BASE?>/controllerPanier/affichePanier"><button type="button" class="btn btn-secondary" >Accéder à mon panier</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>               
                    
                </div>
            </div>    
                    
            
        </section>
        <br>
        <br>
        
<?php include('_footer.php') ?>