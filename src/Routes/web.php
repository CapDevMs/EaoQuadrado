<?php

use App\Controllers\aprovadosController;
use App\Controllers\AuthController;
use App\Controllers\HomeController;
use App\Controllers\MinhaLojaController;
use App\Controllers\ProdutoController;
use Core\Router;

$router = new Router();

$router->get('/', HomeController::class, 'index');
$router->get('/conta', aprovadosController::class, 'conta');
$router->get('/produto', ProdutoController::class, 'produto');
$router->get('/logout', AuthController::class, 'logout');
$router->get('/login', AuthController::class, 'index');
$router->post('/login', AuthController::class, 'login');
$router->get('/loja', MinhaLojaController::class, 'loja');

$router->dispatch();