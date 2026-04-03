<?php

require __DIR__ . '/../controller/HomeController.php';
require __DIR__ . '/../core/Router.php';

$routes = require __DIR__ . '/../routes.php';

$router = new Router($routes);
$router->run();