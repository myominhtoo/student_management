<?php

require("./vendor/autoload.php");   

// use App\lib\database\MySQL;

// $mysql = new MySQL();

use App\lib\http\HTTP;
use App\lib\http\Request;
use App\lib\http\Session;

$request = new Request("get");
$session = new Session();

$session->set( "name" , "hey" );

HTTP::go( $request->value("route") );