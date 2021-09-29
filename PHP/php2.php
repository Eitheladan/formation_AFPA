<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
        <h1>Ceci est ton E-mail</h1>
        
        <?php
            
            $ages = ["Mathilde" => 27, "Pierre" => 29, "Amandine" => 21];

            $mails["Mathilde"] = "math@gmail.com";
            $mails["Pierre"] = "pierre.giraud@dhec.com";
            $mails["Amandine"] = "amandine@lp.fr";

            $cherchemails = $_POST ["nom"];
            $existe=false;

            foreach ($mails as $item=>$mail) {

                if ($cherchemails == $item){

                    echo $mail; $existe=true ; break ;
                }
                 
            }

            if (! $existe){

                echo ($cherchemails." N'existe pas");
            }



        ?>

        <p> Un paragraphe</p>
        
    </body>
</html>