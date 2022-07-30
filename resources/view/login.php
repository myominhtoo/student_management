<?php

require("../../vendor/autoload.php");

use App\lib\http\Session;

$session = new Session();

echo $session->get("name");
