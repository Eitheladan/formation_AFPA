<?php

namespace cinema\controllers;

use cinema\Models\Daos\GenreDao;

class FrontController {

    public function index(){

        echo "<h1>Hello World !</h1>";
    }

    public function genres(){

        $genreDao = new GenreDao();

        $genres = $genreDao->findAll();
        echo "<pre>";
        print_r($genres);
        echo "</pre>";        
    }
} 



?>