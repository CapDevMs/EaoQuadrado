<?php

use App\Controllers\aprovadosController;
use App\Controllers\AuthController;
use App\Controllers\HomeController;
<<<<<<< HEAD
use App\Controllers\categoriaController;
=======
use App\Controllers\HistoricoVendasController;
>>>>>>> 9db3bd7c5aa610d227f98ba9b86205e9c8070c51
use App\Controllers\ProdutoController;
use App\Controllers\meuPerfilAdmController;
use App\Controllers\faqController;
use App\Controllers\favoritosController;
use App\Controllers\cadastro_clienteController;
use App\Controllers\CarrinhoController;
use Core\Router;

$router = new Router();

$router->get('/', HomeController::class, 'index');
<<<<<<< HEAD
$router->get('/categoria', categoriaController::class, 'categoria');
$router->get('/favoritos', favoritosController::class, 'favoritos');
=======
$router->get('/historico_de_contas', aprovadosController::class, 'historico_de_contas');
>>>>>>> 9db3bd7c5aa610d227f98ba9b86205e9c8070c51
$router->get('/perfilAdm', meuPerfilAdmController::class, 'perfilAdm');
$router->get('/favoritos', favoritosController::class, 'favoritos');
$router->get('/produto', ProdutoController::class, 'produto');
$router->get('/cadastro_cliente', cadastro_clienteController::class, 'cadastrosCliente');
$router->get('/logout', AuthController::class, 'logout');
$router->get('/login', AuthController::class, 'index');
$router->post('/login', AuthController::class, 'login');
$router->get('/loja', MinhaLojaController::class, 'loja');
$router->get('/faq', faqController::class, 'faq');
$router->get('/sobre', HomeController::class, 'sobre');
$router->get('/nossa-politica', HomeController::class, 'nossaPolitica');
$router->get('/esqueci-senha', AuthController::class, 'esqueciSenha');
$router->post('/esqueci-senha', AuthController::class, 'recuperarSenha');

$router->dispatch();