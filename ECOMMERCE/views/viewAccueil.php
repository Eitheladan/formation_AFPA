<?php include('_header.php'); ?>

<div id="myCarousel" class="carousel slide border" data-ride="carousel">
   <div class="carousel-inner">
      <div class="carousel-item active">
         <img class="d-block w-100" src="<?=_BASE?>/views/image/test1.jpg" style="width: 100px;" alt="Parfums">
         <div class="carousel-caption">
            <h2>Parfums</h2>
            <div style="margin-bottom:50px">
            "Le parfum qui va vous ravir"
            </div>
         </div>
      </div>
      <div class="carousel-item">
         <img class="d-block w-100" src="<?=_BASE?>/views/image/test2.jpg" style="width: 100px;" alt="Gel douche">
         <div class="carousel-caption">
            <h2>Gels Douches</h2>
            <div style="margin-bottom:50px">
            "Quel bonheur de se doucher avec les essences de son parfum préféré"
            </div>
         </div>
      </div>
      <div class="carousel-item">
         <img class="d-block w-100" src="<?=_BASE?>/views/image/test3.jpg" style="width: 100px;" alt="Maquillage">
         <div class="carousel-caption">
            <h2>Maquillages</h2>
            <div style="margin-bottom:50px">"La séduction de tous les instants"</div>
         </div>
      </div>
   </div>
   <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
   <span class="carousel-control-prev-icon" aria-hidden="true"></span>
   <span class="sr-only">Previous</span>
   </a>
   <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
   <span class="carousel-control-next-icon" aria-hidden="true"></span>
   <span class="sr-only">Next</span>
   </a>
</div>


<?php include('_footer.php'); ?>