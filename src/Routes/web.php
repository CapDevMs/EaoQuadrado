<?php

use App\Controllers\aprovadosController;
use App\Controllers\AuthController;
use App\Controllers\HomeController;
<<<<<<< HEAD
use App\Controllers\ListaVendedoresController;
=======
use App\Controllers\MinhaLojaController;
>>>>>>> 724b55fcaa8545d4c9d5dafeb90322bde7f2181d
use App\Controllers\ProdutoController;
use App\Controllers\meuPerfilAdmController;
use Core\Router;

$router = new Router();

$router->get('/', HomeController::class, 'index');
<<<<<<< HEAD
$router->get('/lista', ListaVendedoresController::class, 'lista');
=======
$router->get('/conta', aprovadosController::class, 'conta');
$router->get('/perfilAdm', meuPerfilAdmController::class, 'perfilAdm');
>>>>>>> 724b55fcaa8545d4c9d5dafeb90322bde7f2181d
$router->get('/produto', ProdutoController::class, 'produto');
$router->get('/logout', AuthController::class, 'logout');
$router->get('/login', AuthController::class, 'index');
$router->post('/login', AuthController::class, 'login');
$router->get('/loja', MinhaLojaController::class, 'loja');

$router->dispatch();