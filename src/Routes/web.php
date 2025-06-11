<?php
// cadastroProdutoVendedor
// area adm
use App\Controllers\CadastroAdminController;
use App\Controllers\AprovadosController;
use App\Controllers\ContasInativasController;
use App\Controllers\CriarCategoriaController;
use App\Controllers\IndexAdmController;
use App\Controllers\ListaVendedoresController;
use App\Controllers\MeuPerfilAdmController;
use App\Controllers\SuporteAoColaboradorController;
use App\Controllers\ValidacaoNovoVendedorController;
// cadastros
use App\Controllers\CadastroClienteController;
use App\Controllers\CadastroVendedorController;
use App\Controllers\AuthController;
// area cliente
use App\Controllers\CarrinhoController;
use App\Controllers\FavoritosController;
use App\Controllers\HistoricoDePedidosController;
// area vendedor
use App\Controllers\CadastrarProdutoVendedorController;
use App\Controllers\HistoricoVendasController;
use App\Controllers\MeuPerfilVendedorController;
use App\Controllers\PaginaDoVendedorController;
use App\Controllers\MinhaLojaController;
use App\Controllers\PaginaDoVendedorController2; 
use App\Controllers\GerenciamentoDeEstoqueController;
// area comum
use App\Controllers\TrocasDevolucoesController;
use App\Controllers\ProdutoController;
use App\Controllers\HomeController;
use App\Controllers\CategoriaController;
use App\Controllers\FaqController;
use App\Controllers\ContatoController;
use App\Controllers\TermosDeUsoController;

use Core\Router;

$router = new Router();

// área adm

$router->get('/admin/cadastroAdm', CadastroAdminController::class, 'cadastroAdmin');
$router->get('/admin/contasAprovadasReprovadas', AprovadosController::class, 'contasAprovadasReprovadas');
$router->get('/admin/contasInativas', contasInativasController::class, 'contasInativas'); 
$router->get('/admin/criarCategoria', CriarCategoriaController::class, 'criarCategoria'); 
$router->get('/admin/indexAdm', IndexAdmController::class, 'indexAdm');
$router->get('/admin/listaVendedores', ListaVendedoresController::class, 'listaDeVendedores');
$router->get('/admin/meuPerfilAdm', meuPerfilAdmController::class, 'perfilAdm');
$router->get('/admin/suporteColaborador', SuporteAoColaboradorController::class, 'suporteAoColaborador');
$router->get('/admin/validacaoNovoVendedor', ValidacaoNovoVendedorController::class, 'validacaoNovoVendedor');

// cadastros

$router->get('/cadastroCliente', CadastroClienteController::class, 'cadastroCliente');
$router->get('/cadastroVendedor', CadastroVendedorController::class, 'cadastroVendedor');

// área cliente

$router->get('/favoritos', FavoritosController::class, 'favoritos');
$router->get('/carrinho', CarrinhoController::class, 'carrinho');

// área vendedor

$router->get('/vendedor/meuPerfilVendedor', MeuPerfilVendedorController::class, 'meuPerfilVendedor');
$router->get('/vendedor/cadastrarProduto', CadastrarProdutoVendedorController::class, 'cadastrarProduto');
$router->get('/vendedor/historicoVendas', HistoricoVendasController::class, 'historicoDeVendas');
$router->get('/vendedor/minhaLoja', MinhaLojaController::class, 'minhaLoja');
$router->get('/vendedor/paginaVendedor', PaginaDoVendedorController::class, 'paginaDoVendedor');
$router->get('/vendedor/gerenciamentoEstoque', GerenciamentoDeEstoqueController::class, 'gerenciamentoDeEstoque');
$router->get('/vendedor/trocasDevolucoes', TrocasDevolucoesController::class, 'trocasDevolucoes');



// área comum

$router->get('/categoria', CategoriaController::class, 'categoria');
$router->get('/contato', ContatoController::class, 'contato');
$router->get('/esqueciSenha', AuthController::class, 'esqueciSenha');
$router->get('/faq', faqController::class, 'faq');
$router->get('/historicoPedidos', HistoricoDePedidosController::class, 'historicoDePedidos');
$router->get('/login', AuthController::class, 'index');
$router->post('/login', AuthController::class, 'login');
$router->get('/logout', AuthController::class, 'logout');
$router->post('/esqueciSenha', AuthController::class, 'recuperarSenha');
$router->get('/nossaPolitica', HomeController::class, 'nossaPolitica');

// Problema

$router->get('/paginaVendedor', PaginaDoVendedorController2::class, 'paginaDoVendedor2'); 


$router->get('/produto', ProdutoController::class, 'produto');
$router->get('/sobre', HomeController::class, 'sobre');
$router->get('/termosUso', TermosDeUsoController::class, 'termosDeUso');


// Home
$router->get('/', HomeController::class, 'index');

$router->dispatch();