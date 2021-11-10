<?php


namespace cinema\Models\Services;

use cinema\Models\Daos\GenreDao;
use cinema\Models\Entities\Genre;


class GenreService

{
    Private $genreDao;

    public function __construct()
    {
    $this->genreDao = new GenreDao();
    }

    public function getAllGenres()
    {
        $genres = $this->genreDao->findAll();
        return $genres;
    }

    public function getById($id)
    {
        $genre = $this->genreDao->findById($id);
        return $genre;
    }
}