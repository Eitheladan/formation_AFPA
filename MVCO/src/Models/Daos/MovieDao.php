<?php
namespace cinema\Models\Daos;

use cinema\Models\Entites\Movie;
use cinema\Models\Entites\Genre;
use cinema\Models\Entites\Director;

class MovieDao extends BaseDao
{
    public function findAll()
    {
        $stmt = $this->db->prepare("SELECT * FROM movie");
        $res = $stmt->execute();
        
        if ($res){
            $movie = [];
            while ($row = $stmt->fetch(\PDO::FETCH_ASSOC))
            {
                $movie[] = $this->createObjectFromFields($row);
            }
            return $movie;
        }else{
            throw new \PDOException($stmt->errorInfo()[2]);
        }
    }

    public function findById($id)
    {
        $stmt = $this->db->prepare("SELECT * FROM movie WHERE id = $id");
        $res = $stmt->execute();        
        if ($res){                
            return $this->createObjectFromFields($stmt->fetch(\PDO::FETCH_ASSOC));                
        }else{
            throw new \PDOException($stmt->errorInfo()[2]);
        }
    } 

    public function insert($movie)
    {
        $title=$movie->getTitle();
        $description=$movie->getDescription();        
        $date = $movie->getDate();        
        $coverimage=$movie->getCoverImage();
        $duration=$movie->getDuration();
        $idgenre=$movie->getIdGenre();
        $iddirector=$movie->getIdDirector();
        $sql=$this->db->prepare("INSERT INTO movie (title, description, duration, date, cover_image, genre_id, director_id) VALUES (?,?,?,?,?,?,?)");        
        $sql->execute(array($title, $description, $duration, $date, $coverimage, $idgenre, $iddirector));        
    }

    public function createObjectFromFields($fields): Movie
    {
        $movie = new Movie();
        $movie->setId($fields['id'])
            ->setTitle($fields['title'])
            ->setDescription($fields['description'])
            ->setDate($fields['date'])
            ->setCoverImage($fields['cover_image'])
            ->setDuration($fields['duration'])
            ->setIdGenre($fields['id_genre'])
            ->setIdDirector($fields['id_director']);

        return $movie;
    }
}