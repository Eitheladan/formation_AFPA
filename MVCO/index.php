<?php 

// define('ROOT', dirname(__DIR__));
require_once __DIR__ . '/vendor/autoload.php';

use cinema\controllers\FrontController;
use cinema\controllers\BackController;
// use cinema\controllers\BackController;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

$loader = new FilesystemLoader(__DIR__ . '/src/views');
$twig = new Environment($loader, ['cache' => false]);

$fc = new FrontController($twig);
$bc = new BackController($twig);

$base  = dirname($_SERVER['PHP_SELF']);

if(ltrim($base, '/')){ 
    $_SERVER['REQUEST_URI'] = substr($_SERVER['REQUEST_URI'], strlen($base));
}

$klein = new \Klein\Klein();

function montreMoi($cetteFuckingVariable) {
    echo "<pre>" ;
    print_r($cetteFuckingVariable) ;
    echo "</pre>" ;
    }

$klein->respond("GET", '/', function() use ($fc) {
    $fc->index();
});

$klein->respond ("GET", '/genres', function() use ($fc) {    
    $fc->genres();
});

$klein->respond ("GET", '/genre/1', function() use ($fc) { 
    $id=1;   
    $fc->genre($id);
});

$klein->respond ("GET", '/actors', function() use ($fc) {    
    $fc->actors();
});

$klein->respond ("GET", '/directors', function() use ($fc) {    
    $fc->directors();
});

$klein->respond ("GET", '/movies', function() use ($fc) {    
    $fc->movies();
});

$klein->respond ("GET", '/movie/[:id]', function($request) use ($fc) {
    $fc->movie($request->id);
});

$klein->respond ("GET", '/addmovie', function() use ($fc) {
    $fc->addmovie();
});

$klein->respond('POST', '/addMovie', function($request,$post) use($bc) {
    
    $bc->addMovie($request->paramsPost());    
});

$klein->respond ("GET", '/addgenre', function() use ($fc) {
    $fc->addgenre();
});

$klein->respond('POST','/addgenre', function($request,$post) use($bc) {
    $bc->addGenre($request->paramsPost());    
});

$klein->respond ("GET", '/addDirector', function() use ($fc) {
    $fc->addDirector();
});

$klein->respond('POST','/addDirector', function($request,$post) use($bc) {
    $bc->addDirector($request->paramsPost());    
});

$klein->dispatch();

?>