<?php

namespace cinema\Models\Services;

use cinema\Models\Daos\MovieDao;
use cinema\Models\Daos\DirectorDao;
use cinema\Models\Daos\ActorDao;
use cinema\Models\Daos\GenreDao;

class MovieService

{
    private $movieDao;
    private $actorDao;
    private $directorDao;
    private $genreDao;


    public function __construct()
    {
    $this->movieDao = new MovieDao();
    $this->genreDao = new GenreDao();
    $this->directorDao = new DirectorDao();
    $this->actorDao = new ActorDao();
    }

    public function getAllMovies()
    {
        $movies = $this->movieDao->findAll();
        return $movies;
    }
    
    public function getById($id)
    {
        $movie = $this->movieDao->findById($id);        
        $actors = $this->actorDao->findByMovie($id);

        foreach ($actors as $actor)
        {
            $movie->addActor($actor['nom']);
            var_dump($movie);
        }

        $genre = $this->genreDao->findByMovie($id);

        $director = $this->directorDao->findByMovie($id);
        $movie->setDirector($director);

        return $movie;
    }
}

?>