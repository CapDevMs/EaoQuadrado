<?php
require_once('../../config/funcoes.php');
require('../../config/conexao.php');
?>
<?php
$base_url = get_base_url();
?>
<!DOCTYPE html>
<html lang="pt-BR">
 
<>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <?php get_css(['admin/lista_de_vendedores','cliente/pagina_vendedor','base', 'style']); ?>
    <title>Eao Quadrado</title>
</head>
 
<body>
    <?php get_header(); ?>
 
    <!-- col-9 col-md-5 -->
    <main>
    <div class="roadmap">Home / Painel do Administrador / Lista de Vendedores</div>

            <div class="all container row">
                <ul class="menu-adm col-sm-3 col-xl-2">
                    <li>
                        <input type="checkbox" id="item1">
                        <label for="item1">Cadastro</label>
                        <div class="content">
                            <a href="<?= get_base_url(); ?>/pages/admin/produto.php">Cadastrar Novo Administrador</a>
                            <a href="<?= get_base_url(); ?>/pages/admin/meu_perfil_adm.php">Gerenciar Meu Perfil</a>
                        </div>
                    </li>

                    <li>
                        <input type="checkbox" id="item2">
                        <label for="item2">Colaboradores</label>
                        <div class="content">
                            <a href="<?= get_base_url(); ?>/pages/admin/validacaoNovoVendedor.php">Validar Novo Colaborador</a>
                            <a href="<?= get_base_url(); ?>#">Validar Novo Colaborador</a>
                            <a href="<?= get_base_url(); ?>#">Colaboradores Aprovados</a>
                            <a href="<?= get_base_url(); ?>#">Colaboradores Reprovados</a>
                            <a id="pagina_atual" href="<?= get_base_url(); ?>#">Listar Colaboradores Ativos</a>
                            <a href="<?= get_base_url(); ?>/pages/admin/suporte_ao_colaborador">Suporte ao Colaborador</a>
                        </div>
                    </li>

                    <li>
                        <input type="checkbox" id="item3">
                        <label for="item3">Clientes</label>
                        <div class="content">
                            <a href="<?= get_base_url(); ?>#"> Suporte ao Cliente</a>
                        </div>
                    </li>

                    <li>
                        <input type="checkbox" id="item4">
                        <label for="item4">Sistema</label>
                        <div class="content">
                            <a href="<?= get_base_url(); ?>#">Abrir Chamado</a>
                            <a href="<?= get_base_url(); ?>/pages/admin/criar_categoria.php">Criar Categoria</a>
                        </div>
                    </li>
                </ul>
                    
                <div class="lista-vendedor container col-sm-10 col-lg-8 ml-0 mb-1">

                    <div class="col-sm-11 ml-1">
                        <div class="card-vend">
                            <div class="card-body">
                                <div class="container mtb-1">
                                    <div class="row inner-container">
                                        <div class="cont-1 col-sm-12 col-md-2 col-xl-2">
                                            <div class="avatar">
                                                <img src="<?= get_base_url(); ?>/assets/img/cliente/studio_center.svg" alt="" class="img-fluid">
                                            </div>
                                        </div>
                                        <div class="cont-2 col-sm-12 col-md-6 col-xl-7">
                                            <div class="name col-sm-12 col-md-2">
                                                <h2>
                                                    Studio Center
                                                    <i class="fa-regular fa-heart icone"></i>
                                                </h2>
                                            </div>
                                            <div class="col-sm-12 ">
                                                <a class="email" href="mailto:studiocenterpy@gmail.com" class="text">studiocenterpy@gmail.com</a>
                                            </div>
                                            <div class="col-sm-12">
                                                <p class="text mt-1">Categorias: Roupas, Camêras, Smartphones, Computadores, Telefones</p>
                                            </div>
                                            <div class="col-md-hidden col-sm-12 pb-1"></div>
                                        </div>
                                        <div class="cont-3 col-sm-12 col-md-4 col-xl-3">
                                            <div class="row">
                                                <div class="col-sm-12 stars">
                                                    <p class="text-star">
                                                        Avaliações: 
                                                        <i class="fa fa-star icone-star"></i>
                                                        <i class="fa fa-star icone-star"></i>
                                                        <i class="fa fa-star icone-star"></i>
                                                        <i class="fa-regular fa-star icone-star"></i>
                                                        <i class="fa-regular fa-star icone-star"></i>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row pl-1">
                                                <div class="col-sm-10 pt-1 contato-container">
                                                    <img class="whatsapp" src="<?= get_base_url(); ?>/assets/img/icons/whatsapp.svg" alt="whatsapp">
                                                    <a target="_blank" class="contato" href="https://wa.me/556734377000">(67) 3437-7000</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            
                </div>
    
            </div>
     </div>
    </main>
    <?php get_footer(); ?>
</body>
<script src="script.js"></script>
</html>