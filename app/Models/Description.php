<?php

namespace portfolio\Models;

use portfolio\Utils\Database;
use PDO;

class Description
{
    private $id;
    private $title;
    private $body;

    public static function findAll()
    {
        $pdo = Database::getPDO();

        $sql = 'SELECT * FROM `description`';

        $pdostatement = $pdo->query($sql);
        $descriptions = $pdostatement->fetchAll(PDO::FETCH_CLASS, self::class);
        return $descriptions;
    }


    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of title
     */ 
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Get the value of body
     */ 
    public function getBody()
    {
        return $this->body;
    }

}