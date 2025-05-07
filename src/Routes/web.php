<?php

use App\Controllers\AuthController;
use App\Controllers\HomeController;
use App\Controllers\ProdutoController;
<<<<<<< HEAD
use App\Controllers\favoritosController;
=======
use App\Controllers\meuPerfilAdmController;
>>>>>>> bf943faa2b4ce0c2d8f0417823810e07ca93a11f
use Core\Router;

$router = new Router();

$router->get('/', HomeController::class, 'index');
<<<<<<< HEAD
$router->get('/favoritos', favoritosController::class, 'favoritos');
=======
$router->get('/perfilAdm', meuPerfilAdmController::class, 'perfilAdm');
>>>>>>> bf943faa2b4ce0c2d8f0417823810e07ca93a11f
$router->get('/produto', ProdutoController::class, 'produto');
$router->get('/logout', AuthController::class, 'logout');
$router->get('/login', AuthController::class, 'index');
$router->post('/login', AuthController::class, 'login');

$router->dispatch();