<?php

namespace portfolio\Models;

use portfolio\Utils\Database;
use PDO;

class Tryskill {

    private $id;
    private $name;
    private $picture;
    private $alternativetext;

    public static function find($id)
    {

    }

    public static function findAll()
    {
        $pdo = Database::getPDO();

        $sql = "
            SELECT * FROM `tryskill`
        ";
        $pdostatement = $pdo->query($sql);
        $results = $pdostatement->fetchAll(PDO::FETCH_CLASS, self::class);
        return $results;
    }

    public static function insert()
    {

    }

    public static function update()
    {

    }

    public static function delete()
    {

    }


}