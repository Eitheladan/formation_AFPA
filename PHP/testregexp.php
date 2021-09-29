
<?php


$myfile = fopen("textfile.txt","a") or die ('problem');
$txt = "Paris 6 \n";
fwrite($myfile,$txt);
fwrite($myfile,"UBO \n");


fclose($myfile)



?>