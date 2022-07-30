<?php

namespace App\lib\http;

class HTTP{

    static $base_url = "http://localhost:8088/student/resources/view/";

    static function go( string $path  ){
        if(!empty($path)){
            $target = static::$base_url."".$path.".php";
            header("location: $target");
        }
    }

}