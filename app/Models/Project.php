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
    private $alternativetext;
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
     * Set the value of year
     *
     * @return  self
     */ 
    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }

    /**
     * Get the value of duration
     */ 
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Set the value of duration
     *
     * @return  self
     */ 
    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get the value of title
     */ 
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */ 
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of body
     */ 
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Set the value of body
     *
     * @return  self
     */ 
    public function setBody($body)
    {
        $this->body = $body;

        return $this;
    }

    /**
     * Get the value of screenshot
     */ 
    public function getScreenshot()
    {
        return $this->screenshot;
    }

    /**
     * Set the value of screenshot
     *
     * @return  self
     */ 
    public function setScreenshot($screenshot)
    {
        $this->screenshot = $screenshot;

        return $this;
    }

        /**
     * Get the value of alternativetext
     */ 
    public function getAlternativetext()
    {
        return $this->alternativetext;
    }

    /**
     * Set the value of alternativetext
     *
     * @return  self
     */ 
    public function setAlternativetext($alternativetext)
    {
        $this->alternativetext = $alternativetext;

        return $this;
    }

    /**
     * Get the value of caption
     */ 
    public function getCaption()
    {
        return $this->caption;
    }

    /**
     * Set the value of caption
     *
     * @return  self
     */ 
    public function setCaption($caption)
    {
        $this->caption = $caption;

        return $this;
    }
}