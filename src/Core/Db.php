<?php

namespace App\Core;
use \PDO;
use \Exception;

class Db 
{
    public $pdo = null;

    public function __construct($host, $dbname, $user, $password)
    {
        try {
            $this->pdo = new PDO(
                'mysql:host='.$host.';dbname='.$dbname.';charset=utf8'
                , $user
                , $password
                , [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
            );
        } catch(Exception $e) {
            var_dump($e);
        }
    }

    public function prepare($sql)
    {
        return $this->pdo->prepare($sql);
    }
}