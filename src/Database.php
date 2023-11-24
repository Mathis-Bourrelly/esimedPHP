<?php

namespace App;
class Database
{
    const USER = 'root';
    const PASS = '';
    private \PDO $conn;
    private static $_instance;

    function __construct()
    {

        $this->conn = new \PDO('mysql:host=localhost;dbname=parapente', self::USER, self::PASS);
    }

    public function getConnection():\PDO{
        return $this->conn;
    }
    public static function getInstance(){
        if(is_null(self::$_instance)){
            self::$_instance = new database();
        }
        return self::$_instance;
    }
}
