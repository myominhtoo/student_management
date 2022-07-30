<?php

namespace App\lib\database;

use PDO;
use PDOException;

class MySQL{

    private $db_host;
    private $db_name;
    private $db_user;
    private $db_password;

    private $db = null;

    public function __construct( string $db_host , string $db_name , string $db_user , string $db_password )
    {
        $this->db_host = $db_host;
        $this->db_name = $db_name;
        $this->db_user = $db_user;
        $this->db_password = $db_password;
    }

    public function connect():PDO
    {
        try{

            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
            ];

            $this->db = new PDO(
                "mysql:host=$this->db_host;dbname=$this->db_name",
                $this->db_user,
                $this->db_password,
                $options
            );

        }catch( PDOException $e ){
            echo $e->getMessage();
        }

        return $this->db;
    }

}