<?php

use App\Controllers\AuthController;
use App\Controllers\HomeController;
use App\Controllers\categoriaController;
use App\Controllers\ProdutoController;
use App\Controllers\meuPerfilAdmController;
use Core\Router;

$router = new Router();

$router->get('/', HomeController::class, 'index');
<<<<<<< HEAD
$router->get('/categoria', categoriaController::class, 'categoria');
$router->get('/favoritos', favoritosController::class, 'favoritos');
=======
>>>>>>> 5bc5aabd28e8998de2de55cd46bf51ce4a114684
$router->get('/perfilAdm', meuPerfilAdmController::class, 'perfilAdm');
$router->get('/produto', ProdutoController::class, 'produto');
$router->get('/logout', AuthController::class, 'logout');
$router->get('/login', AuthController::class, 'index');
$router->post('/login', AuthController::class, 'login');

$router->dispatch();