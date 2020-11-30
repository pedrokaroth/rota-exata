<?php

ob_start();
date_default_timezone_set('America/Sao_Paulo');

require __DIR__ . "/vendor/autoload.php";

$route = new \CoffeeCode\Router\Router(url(), ":");
$route->namespace("Source\App");

$route->group(null);
$route->get("/", "Web:home");

$route->dispatch();

if ($route->error()) {
    var_dump($route->error());
}

ob_end_flush();