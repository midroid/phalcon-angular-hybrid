<?php 

use Phalcon\Mvc\Router;

$router = new Router();

$router->add(
    "landing",
    [
        "controller" => "index",
        "action"    => "landing"
    ]
);

$router->add(
    "angular",
    [
        "controller" => "index",
        "action"    => "angular"
    ]
);

return $router;