<?php

namespace App\lib\http;

use Error;

class Request{

    private $method;

    public function __construct( string $method )
    {
        $this->defineMethod( $method );
    }

    public function value( $key )
    {
        return $this->method[$key];
    }


    private function defineMethod( $method )
    {
       try{
            switch( $method ){
                case "get" :
                    $this->method = $_GET;
                    break;
                case "post":
                    $this->method = $_POST;
                    break;
                default : 
                    throw new Error("Unsupported method!");
            };
        }catch( Error $e){
           echo $e->getMessage();
        }
    }
}