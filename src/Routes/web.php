<?php

use App\Controllers\AuthController;
use App\Controllers\HomeController;
use App\Controllers\aberturaChamadosController;
use App\Controllers\ProdutoController;
use Core\Router;

$router = new Router();

$router->get('/', HomeController::class, 'index');
$router->get('/chamados', aberturaChamadosController::class, 'chamados');
$router->get('/produto', ProdutoController::class, 'produto');
$router->get('/logout', AuthController::class, 'logout');
$router->get('/login', AuthController::class, 'index');
$router->post('/login', AuthController::class, 'login');

$router->dispatch();