<?php

use App\Controllers\AprovadosController;
use App\Controllers\AuthController;
use App\Controllers\HomeController;
use App\Controllers\categoriaController;
use App\Controllers\HistoricoVendasController;
use App\Controllers\ProdutoController;
use App\Controllers\meuPerfilAdmController;
use App\Controllers\contasInativasController;
use App\Controllers\faqController;
use App\Controllers\favoritosController;
use App\Controllers\CadastroClienteController;
use App\Controllers\CarrinhoController;
use App\Controllers\CadastrarProdutoVendedorController;
use App\Controllers\CadastroVendedorController;
use App\Controllers\MinhaLojaController;
use App\Controllers\CadastroAdminController;
use Core\Router;

$router = new Router();


// área comum

$router->get('/', HomeController::class, 'index');
$router->get('/logout', AuthController::class, 'logout');
$router->get('/login', AuthController::class, 'index');
$router->post('/login', AuthController::class, 'login');
$router->get('/faq', faqController::class, 'faq');
$router->get('/sobre', HomeController::class, 'sobre');
$router->get('/nossa-politica', HomeController::class, 'nossaPolitica');
$router->get('/esqueci-senha', AuthController::class, 'esqueciSenha');
$router->post('/esqueci-senha', AuthController::class, 'recuperarSenha');
$router->get('/cadastro-cliente', CadastroClienteController::class, 'cadastroCliente');
$router->get('/cadastro-vendedor', CadastroVendedorController::class, 'cadastroVendedor');
$router->get('/categoria', categoriaController::class, 'categoria');
$router->get('/produto', ProdutoController::class, 'produto');


// área vendedor

$router->get('/vendas', HistoricoVendasController::class, 'vendas');
$router->get('/cadastrar-produto', CadastrarProdutoVendedorController::class, 'cadastrarProduto');
$router->get('/minha-loja', MinhaLojaController::class, 'loja');


// área cliente

$router->get('/favoritos', FavoritosController::class, 'favoritos');
$router->get('/carrinho', CarrinhoController::class, 'carrinho');

// área adm

$router->get('/contas-inativas', contasInativasController::class, 'contasInativas');
$router->get('/historico-de-contas', AprovadosController::class, 'historicoDeContas');
$router->get('/cadastrar-novo-adm', CadastroAdminController::class, 'cadastroAdmin');
$router->get('/meu-perfil-adm', meuPerfilAdmController::class, 'perfilAdm');
$router->get('/suporte_colaborador', suporteColaborador::class, 'suporte_colaborador');






$router->get('/conta', aprovadosController::class, 'conta');

$router->dispatch();