<?php 

require_once __DIR__ . '/vendor/autoload.php';

$fc = new \cinema\controllers\FrontController;//$fc->index();


$base  = dirname($_SERVER['PHP_SELF']);

if(ltrim($base, '/')){ 
    $_SERVER['REQUEST_URI'] = substr($_SERVER['REQUEST_URI'], strlen($base));
}

$klein = new \Klein\Klein();
// echo "<pre>";
// print_r($klein);die();
// echo "</pre>";
$klein->respond ("GET", '/genres', function() use ($fc) {
    $fc->genres();
});

$klein->dispatch();


?>