<?php

use App\Controllers\AuthController;
use App\Controllers\HomeController;
use Core\Router;

$router = new Router();

$router->get('/', HomeController::class, 'index');
$router->get('/login', AuthController::class, 'index');
$router->post('/login', AuthController::class, 'login');

$router->dispatch();