<?php

namespace portfolio\Models;

use portfolio\Utils\Database;
use PDO;

class Softskill {

    private $id;
    private $name;

    public static function find($id)
    {
        $pdo = Database::getPDO();

        $sql = '
            SELECT * FROM `softskill`
            WHERE `id` = ' . $id;
        ;
        $pdostatement = $pdo->query($sql);
        $softskill = $pdostatement->fetchAll(PDO::FETCH_CLASS, self::class);
        return $softskill;
    }

    public static function findAll()
    {
        $pdo = Database::getPDO();

        $sql = '
            SELECT * FROM `softskill`
        ';
        $pdostatement = $pdo->query($sql);
        $softskills = $pdostatement->fetchAll(PDO::FETCH_CLASS, self::class);
        return $softskills;
    }


    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

}