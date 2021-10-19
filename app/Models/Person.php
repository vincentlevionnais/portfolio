<?php

namespace portfolio\Models;

use portfolio\Utils\Database;
use PDO;

class Person {

    private $id;
    private $picture;
    private $alternative;
    private $message;
    private $mail;
    private $linkedin;
    private $github;

    public static function findOneById()
    {
        $pdo = Database::getPDO();

        $sql = 'SELECT * FROM `person` WHERE id = 1';
        
        $pdostatement = $pdo->query($sql);
        $person = $pdostatement->fetchAll(PDO::FETCH_CLASS, self::class);
        return $person;
    }


    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
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

    /**
     * Get the value of message
     */ 
    public function getMessage()
    {
        return $this->message;
    }


    /**
     * Get the value of mail
     */ 
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Get the value of linkedin
     */ 
    public function getLinkedin()
    {
        return $this->linkedin;
    }

    /**
     * Get the value of github
     */ 
    public function getGithub()
    {
        return $this->github;
    }
}