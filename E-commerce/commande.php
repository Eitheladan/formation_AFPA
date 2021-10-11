
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>

.bienvenue{

text-align: center;
font-size: 20px;
color: black;
position: absolute;
top: 150px;
left: 36%;
width : 650px;
padding-top : 5px;
border-width: 1px; 
border-style: solid; 
border-color: black; 
width: 600px; 
background-color: #e3f2fd; 
border-radius: 15px;      
}

.bienvenue span{
font-weight: bold;
color: red;
}

img {

width : 400px;
height : auto; 
}

.home{
    margin-top: 250px;
    margin-left: 50px; 

}


.wrap{

    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
}

.box{

    width: 500px;
    height: 500px;
    border: 1px solid black;
}

.description{

    text-align: center;
    font-size: 2em;
    font-family: arial;
}

.produit_complet{

    text-align: center;
}

    </style>
</head>
<body>
<?php
include("header_client.php");
?>

<div class="home">
    <div class="row">
        <div class="wrap">
            <?php $products = $DB->query('SELECT * FROM produit'); ?>
            <?php foreach ($products as $product): ?>

            <div class="box">
                <div class="produit_complet">
                    <a href="#">
                        <img src="<?= $product->img?>" alt="">
                    </a>
                    <div class="description">
                        <?= $product->nom; ?>
                        <a href="" class="prix"><?= number_format($product->prix_unitaire,2,',',' '); ?>€</a>
                    </div>
                    <a href="" class="gift">
                        
                    </a>
                    
                </div>
            </div>

            <?php endforeach ?>
            
            
        </div>
    </div>
</div>


    
</body>
</html>