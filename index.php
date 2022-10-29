<?php

use App\Application;

require "vendor/autoload.php";

session_start();

define("PATH_URL", 'http://localhost:8080/');
define("HOST","localhost:3306");
define("DB","redesocial");
define("USER","root");
define("PASS","root");

$app = new Application();
$app->run();

?>