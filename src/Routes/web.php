<?php
// cadastroProdutoVendedor
// area adm
use App\Controllers\Admin\CadastroAdminController;
use App\Controllers\Admin\AprovadosController;
use App\Controllers\Admin\ContasInativasController;
use App\Controllers\Admin\CriarCategoriaController;
use App\Controllers\Admin\IndexAdmController;
use App\Controllers\Admin\ListaVendedoresController;
use App\Controllers\Admin\MeuPerfilAdmController;
use App\Controllers\Admin\SuporteAoColaboradorController;
use App\Controllers\Admin\ValidacaoNovoVendedorController;
// cadastros
use App\Controllers\Cliente\CadastroClienteController;
use App\Controllers\Vendedor\CadastroVendedorController;
// area cliente
use App\Controllers\Cliente\CarrinhoController;
use App\Controllers\Cliente\FavoritosController;
use App\Controllers\Cliente\PerfilClienteController;

// area vendedor
use App\Controllers\Vendedor\CadastroProdutoVendedorController;
use App\Controllers\Vendedor\HistoricoVendasController;
use App\Controllers\Vendedor\MeuPerfilVendedorController;
use App\Controllers\Vendedor\PaginaDoVendedorController;
use App\Controllers\Vendedor\MinhaLojaController;
use App\Controllers\Vendedor\GerenciamentoDeEstoqueController;
use App\Controllers\Vendedor\TrocasDevolucoesController;
// area comum
use App\Controllers\ProdutoController;
use App\Controllers\HomeController;
use App\Controllers\CategoriaController;
use App\Controllers\ContatoController;
use App\Controllers\AuthController;


use Core\Router;

global $router;
$router = new Router();

// área adm

$router->get('/admin/cadastroAdm', CadastroAdminController::class, 'cadastroAdmin');
$router->get('/admin/contasAprovadasReprovadas', AprovadosController::class, 'contasAprovadasReprovadas');
$router->get('/admin/contasInativas', ContasInativasController::class, 'contasInativas'); 
$router->get('/admin/criarCategoria', CriarCategoriaController::class, 'criarCategoria'); 
$router->get('/admin/indexAdm', IndexAdmController::class, 'indexAdm');
$router->get('/admin/listaVendedores', ListaVendedoresController::class, 'listaDeVendedores');
$router->get('/admin/meuPerfilAdm', MeuPerfilAdmController::class, 'perfilAdm');
$router->get('/admin/suporteColaborador', SuporteAoColaboradorController::class, 'suporteAoColaborador');
$router->get('/admin/validacaoNovoVendedor', ValidacaoNovoVendedorController::class, 'validacaoNovoVendedor');

// cadastros

$router->get('/cadastroCliente', CadastroClienteController::class, 'index');
$router->post('/cliente/cadastroCliente', CadastroClienteController::class, 'cadastrarCliente');
$router->get('/cadastroVendedor', CadastroVendedorController::class, 'cadastroVendedor', 'cadastroVendedor');
$router->post('/vendedor/cadastroVendedor', CadastroVendedorController::class, 'salvarCadastroVendedor', 'salvarCadastroVendedor');

// área cliente

$router->get('/favoritos', FavoritosController::class, 'favoritos');
$router->get('/carrinho', CarrinhoController::class, 'carrinho');
$router->get('/cliente', PerfilClienteController::class, 'cliente');


// área vendedor

$router->get('/vendedor/cadastroProduto', CadastroProdutoVendedorController::class, 'index');
$router->post('/vendedor/cadastroProduto', CadastroProdutoVendedorController::class, 'index');
$router->get('/vendedor/historicoVendas', HistoricoVendasController::class, 'historicoDeVendas');
$router->get('/vendedor/minhaLoja', MinhaLojaController::class, 'minhaLoja', 'vendedor.minhaLoja');
$router->get('/vendedor/paginaVendedor', PaginaDoVendedorController::class, 'paginaDoVendedor');
$router->get('/vendedor/gerenciamentoEstoque', GerenciamentoDeEstoqueController::class, 'gerenciamentoDeEstoque');
$router->get('/vendedor/trocasDevolucoes', TrocasDevolucoesController::class, 'trocasDevolucoes');
$router->get('/vendedor/meu_perfil_vendedor', MeuPerfilVendedorController::class, 'meuPerfilVendedor');
$router->get('/vendedor/troca_devolucao_cancelamento', TrocasDevolucoesController::class, 'trocasDevolucoes');


// área comum

$router->get('/categoria', CategoriaController::class, 'categoria', 'categoria');
$router->get('/contato', ContatoController::class, 'contato');
$router->get('/esqueciSenha', AuthController::class, 'esqueciSenha');
$router->get('/login', AuthController::class, 'index', 'login', 'login');
$router->get('/getProdutos', HomeController::class, 'produtos');
$router->get('/getCategorias', CategoriaController::class, 'sendCategorias');
$router->post('/filtroMaxMin', CategoriaController::class, 'filtroMaxMin');
$router->get('/searchProduto', CategoriaController::class, 'searchProduto');
$router->post('/searchProdutoByCategoria', CategoriaController::class, 'searchProdutoByCategoria');
$router->post('/login', AuthController::class, 'login');
$router->get('/logout', AuthController::class, 'logout');
$router->post('/esqueciSenha', AuthController::class, 'recuperarSenha');
$router->get('/nossaPolitica', HomeController::class, 'nossaPolitica');
$router->get('/faq', HomeController::class, 'faq');
$router->get('/sobre', HomeController::class, 'sobre');
$router->get('/termosDeUso', HomeController::class, 'termosDeUso');
$router->get('/produto', ProdutoController::class, 'produto', 'produto');



// Home
$router->get('/', HomeController::class, 'index', 'homepage');

$router->dispatch();