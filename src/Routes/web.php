<?php

use App\Controllers\aprovadosController;
use App\Controllers\AuthController;
use App\Controllers\HomeController;
use App\Controllers\HistoricoVendasController;
use App\Controllers\ProdutoController;
use App\Controllers\meuPerfilAdmController;
use App\Controllers\faqController;
use App\Controllers\favoritosController;
use App\Controllers\cadastro_clienteController;
use App\Controllers\CarrinhoController;
use App\Controllers\CadastrarProdutoVendedorController;
use App\Controllers\CadastroVendedorController;
use Core\Router;

$router = new Router();

$router->get('/', HomeController::class, 'index');
$router->get('/historico_de_contas', aprovadosController::class, 'historico_de_contas');
$router->get('/perfilAdm', meuPerfilAdmController::class, 'perfilAdm');
$router->get('/favoritos', favoritosController::class, 'favoritos');
$router->get('/carrinho', CarrinhoController::class, 'carrinho');
$router->get('/produto', ProdutoController::class, 'produto');
$router->get('/cadastro_cliente', cadastro_clienteController::class, 'cadastrosCliente');
$router->get('/cadastroVendedor', CadastroVendedorController::class, 'cadastroVendedor');
$router->get('/vendas', HistoricoVendasController::class, 'vendas');
$router->get('/cadastrar_produto', CadastrarProdutoVendedorController::class, 'cadastrar_produto');
$router->get('/logout', AuthController::class, 'logout');
$router->get('/login', AuthController::class, 'index');
$router->post('/login', AuthController::class, 'login');
$router->get('/loja', MinhaLojaController::class, 'loja');
$router->get('/faq', FaqController::class, 'faq');
$router->get('/sobre', HomeController::class, 'sobre');
$router->get('/nossa-politica', HomeController::class, 'nossaPolitica');
$router->get('/esqueci-senha', AuthController::class, 'esqueciSenha');
$router->post('/esqueci-senha', AuthController::class, 'recuperarSenha');

$router->dispatch();