<?php

namespace portfolio\Models;

use portfolio\Utils\Database;
use PDO;

class Project
{
    private $id;
    private $year;
    private $duration;
    private $title;
    private $body;
    private $screenshot;
    private $alternative;
    private $caption;

    public static function find($id)
    {
        $pdo = Database::getPDO();

        $sql = '
            SELECT * FROM `project`
            WHERE `id` = ' . $id;
        ;
        $pdostatement = $pdo->query($sql);
        $project = $pdostatement->fetchAll(PDO::FETCH_CLASS, self::class);
        return $project;
    }

    public static function findAll()
    {
        $pdo = Database::getPDO();

        $sql = '
            SELECT * FROM `project`
        ';
        $pdostatement = $pdo->query($sql);
        $projects = $pdostatement->fetchAll(PDO::FETCH_CLASS, self::class);
        return $projects;
    }


    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of year
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Get the value of duration
     */
    public function getDuration()
    {
        return $this->duration;
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

    /**
     * Get the value of screenshot
     */
    public function getScreenshot()
    {
        return $this->screenshot;
    }

    /**
     * Get the value of alternative
     */
    public function getAlternative()
    {
        return $this->alternative;
    }


    /**
     * Get the value of caption
     */
    public function getCaption()
    {
        return $this->caption;
    }
}