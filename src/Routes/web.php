<?php

use App\Controllers\aprovadosController;
use App\Controllers\AuthController;
use App\Controllers\HomeController;
use App\Controllers\HistoricoVendasController;
use App\Controllers\ProdutoController;
use App\Controllers\meuPerfilAdmController;
use Core\Router;

$router = new Router();

$router->get('/', HomeController::class, 'index');
<<<<<<< HEAD
$router->get('/historico_de_contas', aprovadosController::class, 'historico_de_contas');
=======
$router->get('/vendas', HistoricoVendasController::class, 'vendas');
$router->get('/favoritos', favoritosController::class, 'favoritos');
>>>>>>> 9c104fcdf7f4a920adf71f0b1afa78c8028d1b36
$router->get('/perfilAdm', meuPerfilAdmController::class, 'perfilAdm');
$router->get('/produto', ProdutoController::class, 'produto');
$router->get('/logout', AuthController::class, 'logout');
$router->get('/login', AuthController::class, 'index');
$router->post('/login', AuthController::class, 'login');
$router->get('/loja', MinhaLojaController::class, 'loja');

$router->dispatch();