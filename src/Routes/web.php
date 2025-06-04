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
use App\Controllers\cadastro_clienteController;
use App\Controllers\CadastroClienteController;
use App\Controllers\CarrinhoController;
use App\Controllers\CadastrarProdutoVendedorController;
use App\Controllers\CadastroVendedorController;
use App\Controllers\MinhaLojaController;
use App\Controllers\cadastroAdm;
use App\Controllers\IndexAdmController;
use App\Controllers\CriarCategoriaController;
use App\Controllers\ListaVendedoresController;
use App\Controllers\SuporteAoColaboradorController;
use App\Controllers\ValidacaoNovoVendedorController;
use App\Controllers\PaginaDoVendedorController;
use App\Controllers\PaginaDoVendedorController2; //Problema
use App\Controllers\GerenciamentoDeEstoqueController;
use App\Controllers\TrocasDevolucoesController;
use App\Controllers\ContatoController;
use App\Controllers\HistoricoDePedidosController;
use Core\Router;

$router = new Router();

// área adm

$router->get('/cadastroAdm', cadastroAdm::class, 'cadastroAdm');
$router->get('/contasAprovadasReprovadas', AprovadosController::class, 'contasAprovadasReprovadas');
$router->get('/contasInativas', contasInativasController::class, 'contasInativas'); 
$router->get('/criarCategoria', CriarCategoriaController::class, 'criarCategoria'); 
$router->get('/indexAdm', IndexAdmController::class, 'indexAdm');
$router->get('/listaDeVendedores', ListaVendedoresController::class, 'listaDeVendedores');
$router->get('/meuPerfilAdm', meuPerfilAdmController::class, 'perfilAdm');
$router->get('/suporteAoColaborador', SuporteAoColaboradorController::class, 'suporteAoColaborador');
$router->get('/validacaoNovoVendedor', ValidacaoNovoVendedorController::class, 'validacaoNovoVendedor');

// cadastros

$router->get('/cadastroCliente', CadastroClienteController::class, 'cadastroCliente');
$router->get('/cadastroVendedor', CadastroVendedorController::class, 'cadastroVendedor');

// área cliente

$router->get('/favoritos', FavoritosController::class, 'favoritos');
$router->get('/carrinho', CarrinhoController::class, 'carrinho');

// área vendedor

$router->get('/cadastrarProduto', CadastrarProdutoVendedorController::class, 'cadastrarProduto');
$router->get('/historicoDeVendas', HistoricoVendasController::class, 'historicoDeVendas');
$router->get('/minhaLoja', MinhaLojaController::class, 'minhaLoja');
$router->get('/paginaDoVendedor', PaginaDoVendedorController::class, 'paginaDoVendedor');
$router->get('/gerenciamentoDeEstoque', GerenciamentoDeEstoqueController::class, 'gerenciamentoDeEstoque');
$router->get('/trocasDevolucoes', TrocasDevolucoesController::class, 'trocasDevolucoes');


// Problema

$router->get('/paginaDoVendedor2', PaginaDoVendedorController2::class, 'paginaDoVendedor2'); 

// área comum

$router->get('/categoria', categoriaController::class, 'categoria');
$router->get('/contato', ContatoController::class, 'contato');
$router->get('/esqueciSenha', AuthController::class, 'esqueciSenha');
$router->get('/faq', faqController::class, 'faq');
$router->get('/historicoDePedidos', HistoricoDePedidosController::class, 'historicoDePedidos');
$router->get('/logout', AuthController::class, 'logout');
$router->get('/login', AuthController::class, 'index');
$router->post('/login', AuthController::class, 'login');
$router->get('/sobre', HomeController::class, 'sobre');
$router->get('/nossaPolitica', HomeController::class, 'nossaPolitica');
$router->post('/esqueciSenha', AuthController::class, 'recuperarSenha');
$router->get('/produto', ProdutoController::class, 'produto');






// Home
$router->get('/', HomeController::class, 'index');

$router->dispatch();