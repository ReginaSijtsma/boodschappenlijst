<?php


require "function.php";
require "core/bootstrap.php";


$uri = trim(parse_url($_SERVER["REQUEST_URI"],PHP_URL_PATH),"/");


require Router::load("routes.php") -> direct(Request::uri(), Request::method());


