<?php

namespace App\model;

class User{

    private $user_id;
    private $user_name;
    private $user_password;

    public function getUser_id():string
    {
        return $this->user_id;
    }

    public function getUser_name():string
    {
        return $this->user_name;
    }

    public  function getUser_password():string
    {
        return $this->user_password; 
    }

    public function setUser_id( string $user_id ):void
    {   
        $this->user_id = $user_id;
    }

    public function setUser_name( string $user_name ):void
    {
        $this->user_name = $user_name;
    }

    public function setUser_password( string $user_password ):void
    {
        $this->user_password = $user_password;
    }
}