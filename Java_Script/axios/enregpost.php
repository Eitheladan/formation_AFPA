<?php
$data = json_decode(file_get_contents("php://input"), TRUE);
print_r($data) ;
?>