<?php

ob_start();
date_default_timezone_set('America/Sao_Paulo');

require __DIR__ . "/vendor/autoload.php";

$route = new \CoffeeCode\Router\Router(url(), ":");
$route->namespace("Source\App");

$route->group(null);
$route->get("/", "Web:home");

/*Auth*/
$route->get("/login", "Web:login");
$route->post("/login", "Web:login");
$route->get("/logout", "Web:logout");

/*Products*/
$route->get("/produto", "Products:product");
$route->post("/produto", "Products:product");

$route->dispatch();

if ($route->error()) {
    var_dump($route->error());
}

ob_end_flush();