<?php

require("./vendor/autoload.php");   

// use App\lib\database\MySQL;

// $mysql = new MySQL();

use App\lib\http\HTTP;
use App\lib\http\Request;

$request = new Request("get");

HTTP::go( $request->value("route") );