<?php

namespace App\lib\http;

class Session{

    public function __construct()
    {
        session_start();
    }

    public function set( string|int $key , $value ):void
    {
        $_SESSION[$key] = $value;
    }

    public function get( string|int $key )
    {
        if(isset($_SESSION[$key])){
            return $_SESSION[$key];
        }else{
            return false;
        }
    }

    public function remove( string|int $key ):bool
    {
        if(isset($_SESSION[$key])){
            unset($_SESSION[$key]);
        }else{
            return false;
        }
    }

    public function clearAll():void
    {
        session_destroy();
    }
}