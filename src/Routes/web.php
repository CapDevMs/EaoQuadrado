<?php

use App\Controllers\AprovadosController;
use App\Controllers\AuthController;
use App\Controllers\HomeController;
<<<<<<< HEAD
<<<<<<< HEAD
use App\Controllers\aberturaChamadosController;
=======
use App\Controllers\categoriaController;
use App\Controllers\HistoricoVendasController;
>>>>>>> 7dc0a3cfe656848938c26b9789e05d50b3769615
=======
use App\Controllers\AberturaChamadosController;
use App\Controllers\HistoricoVendasController;
>>>>>>> b011d5c2f3352e708a6ed12531a91d48ab4bb3a4
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
<<<<<<< HEAD
$router->get('/', HomeController::class, 'index');
<<<<<<< HEAD
$router->get('/chamados', aberturaChamadosController::class, 'chamados');
=======
$router->get('/categoria', categoriaController::class, 'categoria');
$router->get('/favoritos', favoritosController::class, 'favoritos');
$router->get('/historico_de_contas', aprovadosController::class, 'historico_de_contas');
$router->get('/perfilAdm', meuPerfilAdmController::class, 'perfilAdm');
$router->get('/favoritos', favoritosController::class, 'favoritos');
>>>>>>> 7dc0a3cfe656848938c26b9789e05d50b3769615
$router->get('/produto', ProdutoController::class, 'produto');
$router->get('/cadastro_cliente', cadastro_clienteController::class, 'cadastrosCliente');
=======

// área comum

>>>>>>> e8b59d58cd7a8ee35f8f089d36ddb50f8a9b5771
=======
$router->get('/', HomeController::class, 'index');
$router->get('/chamados', AberturaChamadosController::class, 'chamados');
$router->get('/produto', ProdutoController::class, 'produto');

// área comum

>>>>>>> b011d5c2f3352e708a6ed12531a91d48ab4bb3a4
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