<?php

namespace portfolio\Models;

use portfolio\Utils\Database;
use PDO;

class Hardskill
{
    private $id;
    private $name;
    private $picture;
    private $alternative;

    public static function find($id)
    {
        $pdo = Database::getPDO();

        $sql = '
            SELECT * FROM `hardskill`
            WHERE `id` = ' . $id;;
            
        $pdostatement = $pdo->query($sql);
        $hardskill = $pdostatement->fetchAll(PDO::FETCH_CLASS, self::class);
        return $hardskill;
    }

    public static function findAll()
    {
        $pdo = Database::getPDO();

        $sql = 'SELECT * FROM `hardskill`';

        $pdostatement = $pdo->query($sql);
        $hardskills = $pdostatement->fetchAll(PDO::FETCH_CLASS, self::class);
        return $hardskills;
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

    /**
     * Get the value of picture
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Get the value of alternative
     */
    public function getAlternative()
    {
        return $this->alternative;
    }
}
