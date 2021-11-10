<?php

namespace cinema\controllers;

use cinema\Models\Daos\ActorDao;
use cinema\Models\Services\GenreService;
use cinema\Models\Services\ActorService;
use cinema\Models\Services\DirectorService;
use cinema\Models\Services\MovieService;

use Twig\Environment;


class FrontController {

    private $genreService ;
    private $twig;

    public function index(){
        
        echo "<h1>Hello World !</h1>";
    }

    public function __construct($twig)
    {
        $this->genreService=new genreService;
        $this->actorService=new actorService;
        $this->directorService=new directorService;
        $this->movieService=new movieService;
        $this->twig = $twig;
        
    }

    public function genres(){   
        
        $genres = $this->genreService->getAllgenres();

        echo $this->twig->render('genres.html.twig', [ "genres" => $genres ] );
    }

    public function genre($id){

        $genre = $this->genreService->getById($id);
        // montreMoi($genre);
    }

    public function actors(){
        
        $actors = $this->actorService->getAllActors();        
        echo $this->twig->render('actors.html.twig', [ "actors" => $actors ] );        
    }

    public function directors(){
        
        $directors = $this->directorService->getAllDirectors();
        // montreMoi($directors);    
        echo $this->twig->render('directors.html.twig', [ "directors" => $directors ] );        
    }

    public function movies(){
        
        $movies = $this->movieService->getAllMovies();
        // montreMoi($directors);    
        echo $this->twig->render('movies.html.twig', [ "movies" => $movies ] );

    }

    public function movie($id)
    {
        $movies = $this->movieService->getById($id);
        echo $this->twig->render('movies.html.twig', [ "movies" => $movies ] );
    }

    
} 
?>