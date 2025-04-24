<?php

use App\Controllers\HomeController;
use Core\Router;

$router = new Router();

$router->get('/', HomeController::class, 'index');

$router->dispatch();