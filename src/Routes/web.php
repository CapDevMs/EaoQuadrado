<?php

use App\Controllers\AprovadosController;
use App\Controllers\AuthController;
use App\Controllers\HomeController;
<<<<<<< HEAD
use App\Controllers\aberturaChamadosController;
=======
use App\Controllers\HistoricoVendasController;
>>>>>>> e8b59d58cd7a8ee35f8f089d36ddb50f8a9b5771
use App\Controllers\ProdutoController;
use App\Controllers\MeuPerfilAdmController;
use App\Controllers\FaqController;
use App\Controllers\FavoritosController;
use App\Controllers\CadastroClienteController;
use App\Controllers\CarrinhoController;
use App\Controllers\CadastrarProdutoVendedorController;
use App\Controllers\CadastroVendedorController;
use App\Controllers\MinhaLojaController;
use Core\Router;

$router = new Router();

<<<<<<< HEAD
$router->get('/', HomeController::class, 'index');
$router->get('/chamados', aberturaChamadosController::class, 'chamados');
$router->get('/produto', ProdutoController::class, 'produto');
=======

// área comum

>>>>>>> e8b59d58cd7a8ee35f8f089d36ddb50f8a9b5771
$router->get('/logout', AuthController::class, 'logout');
$router->get('/login', AuthController::class, 'index');
$router->post('/login', AuthController::class, 'login');
$router->get('/loja', MinhaLojaController::class, 'loja');
$router->get('/faq', FaqController::class, 'faq');
$router->get('/sobre', HomeController::class, 'sobre');
$router->get('/nossa-politica', HomeController::class, 'nossaPolitica');
$router->get('/esqueci-senha', AuthController::class, 'esqueciSenha');
$router->post('/esqueci-senha', AuthController::class, 'recuperarSenha');
$router->get('/cadastro-cliente', CadastroClienteController::class, 'cadastroCliente');
$router->get('/cadastro-vendedor', CadastroVendedorController::class, 'cadastroVendedor');
$router->get('/produto', ProdutoController::class, 'produto');


// área vendedor

$router->get('/vendas', HistoricoVendasController::class, 'vendas');
$router->get('/cadastrar-produto', CadastrarProdutoVendedorController::class, 'cadastrarProduto');

// área cliente

$router->get('/favoritos', FavoritosController::class, 'favoritos');
$router->get('/carrinho', CarrinhoController::class, 'carrinho');

// área adm

$router->get('/', HomeController::class, 'index');
$router->get('/historico-de-contas', AprovadosController::class, 'historicoDeContas');
$router->get('/meu-perfil-adm', meuPerfilAdmController::class, 'perfilAdm');






$router->get('/conta', aprovadosController::class, 'conta');

$router->dispatch();