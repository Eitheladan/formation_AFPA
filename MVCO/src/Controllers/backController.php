<?php

namespace cinema\controllers;


use cinema\Models\Services\GenreService;
use cinema\Models\Services\DirectorService;
use cinema\Models\Services\MovieService;


class BackController
{
    private $genreService ;
    private $directorService ;
    private $movieService ;
    
    public function __construct()
    {
        $this->genreService = new genreService();      
        $this->directorService = new DirectorService();      
        $this->movieService = new MovieService();      
    }

    public function addGenre($genreData)
    {
        $this->genreService->create($genreData);
    }
    
    public function addDirector($directorData)
    {
        $this->directorService->create($directorData);
    }
    
    public function addMovie($movieData)
    {       
        $this->movieService->create($movieData);
    }    
} 
?>