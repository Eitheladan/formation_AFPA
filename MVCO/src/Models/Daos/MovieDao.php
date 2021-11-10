<?php
namespace cinema\Models\Daos;

use cinema\Models\Entites\Movie;

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

    public function createObjectFromFields($fields): Movie
    {
        $movie = new Movie();
        $movie->setId($fields['id'])
            ->setTitle($fields['title'])
            ->setDescription($fields['description'])
            ->setDate(\DateTime::createFromFormat('Y-m-d', $fields['date']))
            ->setCoverImage($fields['cover_image'])
            ->setDuration($fields['duration']);

        return $movie;
    }


    public function findById($id)
    {
        $stmt = $this->db->prepare("SELECT * FROM movie WHERE id = $id");
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
    
}