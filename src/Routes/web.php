<?php

use App\Controllers\AuthController;
use App\Controllers\HomeController;
use App\Controllers\ProdutoController;
use App\Controllers\meuPerfilAdmController;
use Core\Router;

$router = new Router();

$router->get('/', HomeController::class, 'index');
$router->get('/perfilAdm', meuPerfilAdmController::class, 'perfilAdm');
$router->get('/produto', ProdutoController::class, 'produto');
$router->get('/logout', AuthController::class, 'logout');
$router->get('/login', AuthController::class, 'index');
$router->post('/login', AuthController::class, 'login');
$router->get('/sobre', HomeController::class, 'sobre');
$router->get('/nossa-politica', HomeController::class, 'nossaPolitica');

$router->dispatch();