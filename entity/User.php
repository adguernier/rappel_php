<?php

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
        try {
            $bdd = new PDO(
                'mysql:host=localhost;dbname=rappels_php;charset=utf8'
                , 'root'
                , ''
                , [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
            );
        } catch(Exception $e) {
            var_dump($e);
        }

        $sql = $bdd->prepare(
            'INSERT INTO `user` (nom, email) 
            VALUES ("' . $this->nom . '","' . $this->email . '")'
        );
        
        return $sql->execute();
    }
}