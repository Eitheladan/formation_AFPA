<?php

namespace cinema\Models\Daos;

use cinema\models\entites\Actor;

class ActorDao extends BaseDao
{
    public function findAll()
    {
        $stmt = $this->db->prepare("SELECT * FROM actor");
        $res = $stmt->execute();
        
        if ($res){
            $actor = [];
            while ($row = $stmt->fetch(\PDO::FETCH_ASSOC))
            {
                $actor[] = $this->createObjectFromFields($row);
            }
            return $actor;
        }else{
            throw new \PDOException($stmt->errorInfo()[2]);
        }
    }

    public function createObjectFromFields($fields)
    {
        $actor = new Actor ();
        $actor->setId($fields['id'])->setNom($fields['last_name'])->setPrenom($fields['first_name']);

        return $actor;
    }

    public function findByMovie($id){

        
        $stmt = $this->db->prepare("SELECT * FROM movies_actors WHERE movie_id = $id");
        $res = $stmt->execute();
        
        if ($res){
            $actor = [];
            while ($row = $stmt->fetch(\PDO::FETCH_ASSOC))
            {
                $actor[] = $this->createObjectFromFields($row);
            }
            return $actor;
        }else{
            throw new \PDOException($stmt->errorInfo()[2]);
        
    }
    }
    
}