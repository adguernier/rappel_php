<?php

namespace App\Entity;

class User 
{
    private $nom;
    private $email;

    public function getNom(): string
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function insert() 
    {
        $db = new Db('localhost', 'rappels_php', 'root', '');

        $sql = $db->prepare(
            'INSERT INTO `user` (nom, email) 
            VALUES ("' . $this->nom . '","' . $this->email . '")'
        );
        
        return $sql->execute();
    }
}