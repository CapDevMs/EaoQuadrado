<?php

use App\Controllers\AuthController;
use App\Controllers\HomeController;
use App\Controllers\ProdutoController;
use App\Controllers\meuPerfilAdmController;
use App\Controllers\favoritosController;
use Core\Router;

$router = new Router();

$router->get('/', HomeController::class, 'index');
$router->get('/perfilAdm', meuPerfilAdmController::class, 'perfilAdm');
$router->get('/favoritos', favoritosController::class, 'favoritos');
$router->get('/produto', ProdutoController::class, 'produto');
$router->get('/logout', AuthController::class, 'logout');
$router->get('/login', AuthController::class, 'index');
$router->post('/login', AuthController::class, 'login');

$router->dispatch();