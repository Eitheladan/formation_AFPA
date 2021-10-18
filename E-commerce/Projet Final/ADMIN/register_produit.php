<?php include("header_adm.php"); ?>
<body>
    
<div class="bigbox">
    <h1 class="titre">ENREGISTREMENT PRODUIT</h1>
    <form action="insert_produit.php" method="POST" enctype="multipart/form-data">
        <div class="container2">        
            <div class="form form-control">Ref : <br><input id="input_num" type="text" name="ref"></div><br>
            <div class="form form-control">Nom :<br><input type= "text" name="nom" id=""></div><br>
            <div class="form form-control">prix :<br><input type= "text" name="prix" id=""></div><br>
            <input type="file" name="fichier"><br><br> 
            <div class="btn"><br><input class="btn btn-primary" id="input_btn" type="submit" value="Envoyer"><div>
        </div>
    </form>
</div>
</body>

</html>