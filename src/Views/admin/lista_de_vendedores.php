<?php
$appName = get_app_name();
$baseUrl = get_base_url();
$titulo = 'Lista de Vendedores';
?>
<?php
$base_url = get_base_url();
?>
<!DOCTYPE html>
<html lang="pt-BR">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=get_base_url();?>assets/css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <?php get_css(['admin/lista_de_vendedores','cliente/pagina_vendedor','base', 'style']); ?>
    <title>Eao Quadrado</title>
</head>
 
<body>
    <?php get_header(); ?>
 
    <main>
    <!-- <div class="roadmap">Home / Painel do Administrador / Lista de Vendedores</div> -->

            <div class="all container row">
                <!-- <ul class="menu-adm col-sm-3 col-xl-2">
                    <li>
                        <input type="checkbox" id="item1">
                        <label for="item1">Cadastro</label>
                        <div class="content">
                            <a href="<?= get_base_url(); ?>admin/cadastroAdm">Cadastrar Novo Administrador</a>
                            <a href="<?= get_base_url(); ?>admin/meuPerfilAdm">Gerenciar Meu Perfil</a>
                        </div>
                    </li>

                    <li>
                        <input type="checkbox" id="item2">
                        <label for="item2">Colaboradores</label>
                        <div class="content">
                            <a href="<?= get_base_url(); ?>admin/validacaoNovoVendedor">Validar Novo Colaborador</a>
                            <a href="<?= get_base_url(); ?>admin/validacaoNovoVendedor">Validar Novo Colaborador</a>
                            <a href="<?= get_base_url(); ?>admin/contasAprovadasReprovadas">Colaboradores Aprovados</a>
                            <a href="<?= get_base_url(); ?>admin/contasAprovadasReprovadas">Colaboradores Reprovados</a>
                            <a id="pagina_atual" href="<?=get_base_url();?>admin/listaVendedores">Listar Colaboradores Ativos</a>
                            <a href="<?= get_base_url(); ?>admin/suporteColaborador">Suporte ao Colaborador</a>
                            <img src="<?=get_base_url();?>public/assets/img/" alt="">
                        </div>
                    </li>

                    <li>
                        <input type="checkbox" id="item3">
                        <label for="item3">Clientes</label>
                        <div class="content">
                            <a href="<?=get_base_url();?>contato"> Suporte ao Cliente</a>
                        </div>
                    </li>

                    <li>
                        <input type="checkbox" id="item4">
                        <label for="item4">Sistema</label>
                        <div class="content">
                            <a href="<?= get_base_url(); ?>contato">Abrir Chamado</a>
                            <a href="<?= get_base_url(); ?>admin/criarCategoria">Criar Categoria</a>
                        </div>
                    </li>
                </ul> -->
                <h3 class="col-sm-10 col-lg-8 ml-0 mb-1"> Lista de Vendedores</h3>
                <div class="lista-vendedor container col-sm-10 col-lg-8 ml-0 mb-1">
                    <listaVendedores></listaVendedores>

                </div>
    
            </div>
     </div>
    </main>
    <?php get_footer(); ?>
</body>
<script type="module" src="<?= get_base_url(); ?>assets/js/adm/vendedores.js"></script>
</html>