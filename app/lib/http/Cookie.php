<?php

namespace App\lib\http;

class Cookie{

    public function set( string|int $key , $value , $long ):void
    {
        setcookie( $key , $value , $long);
    }

    public function get( string|int $key )
    {
        if(isset($_COOKIE[$key])){
            return $_COOKIE[$key];
        }else{
            return false;
        }
    }

    public function del( string|int $key ):bool
    {
        if(isset($_COOKIE[$key])){
            setcookie( $key , "" , time() - 3600 );
            return true;
        }else{
            return false;
        }
    }

}