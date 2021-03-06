<?php

namespace cinema\Models\Daos;

use cinema\models\entites\Genre;

class GenreDao extends BaseDao
{
    public function findAll()
    {
        $stmt = $this->db->prepare("SELECT * FROM genre");
        $res = $stmt->execute();
        
        if ($res){
            $genre = [];
            while ($row = $stmt->fetch(\PDO::FETCH_ASSOC))
            {
                $genre[] = $this->createObjectFromFields($row);
            }
            return $genre;
        }else{
            throw new \PDOException($stmt->errorInfo()[2]);
        }
    }

    public function createObjectFromFields($fields)
    {
        $genre = new Genre ();
        $genre->setId($fields['id'])->setNom($fields['name']);

        return $genre;
    }
    public function montreMoi($cetteFuckingVariable) {
        echo "<pre>" ;
        print_r($cetteFuckingVariable) ;
        echo "</pre>" ;
        }
}