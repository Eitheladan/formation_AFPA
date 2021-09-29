<?php

$monfichier = fopen("formation.txt", "r") or die("pas de fichier tu es mort sale race de mort !!!!!") ;

// echo fread ($monfichier, filesize("formation.txt"));

        while(!feof($monfichier)){
        $maligne =  fgets($monfichier);
        list ($tag, $cursus) = explode(":",$maligne);
        echo "<h1 style='color: red ; font-weight: bolder ; text-align: center;'>".$tag."</h1>"; 
        echo "<p style='color: black ; font-weight: bolder ; text-align: center;'>".$cursus."</p>";
        }

        fclose($monfichier); 
        
        

?>