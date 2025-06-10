<?php
$appName = get_app_name();
$baseUrl = get_base_url();
$titulo = 'Criar Categoria';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=get_base_url();?>assets/css/admin/criar_categoria.css">
    <?php get_css(['base', 'criar_categoria' , 'style']) ?>
    
    <title>Criar Categoria</title>
</head>
<?php get_base_head(); ?>

<body>
    <header>
    <?php get_header(); ?>
    </header>

    <main>
    <div class="roadmap">Home / Painel do Administrador / Cadastrar Novo Administrador</div>
        <div class="container-geral">
            <div class="menu-container">
                <h1>Cadastro</h1>
                <a href="<?=get_base_url();?>admin/cadastroAdm" id="pagina_atual">Cadastrar Novo Administrador</a>
                <a href="<?=get_base_url();?>admin/meuPerfilAdm">Gerenciar Meu Perfil</a>
                <h1>Colaboradores</h1>
                <a href="<?=get_base_url();?>admin/validacaoNovoVendedor">Validar Novo Colaborador</a>
                <a href="<?=get_base_url();?>admin/contasAprovadasReprovadas">Colaboradores Aprovados</a>
                <a href="<?=get_base_url();?>admin/contasAprovadasReprovadas">Colaboradores Reprovados</a>
                <a href="<?=get_base_url();?>admin/listaVendedores">Listar Colaboradores Ativos</a>
                <a href="<?=get_base_url();?>admin/suporteColaborador">Suporte ao Colaborador</a>
                <h1>Clientes</h1>
                <a href="<?=get_base_url();?>admin/suporteColaborador">Suporte ao Cliente</a>
                <h1>Sistema</h1>
                <a href="<?=get_base_url();?>contato">Abrir Chamado</a>
                <a href="<?=get_base_url();?>admin/criarCategoria">Criar Categoria</a>
                <a href="<?=get_base_url();?>">Editar Sistema</a>
            </div>

            <div class="create-container">
                <div class="img-container">
                    <img src="<?= get_base_url(); ?>assets/img/image_color_icon.svg" alt="">
                    <p>Categoria</p>
                </div>

                <div class="input-label">
                    <div class="column-group1">
                        <label for="name">Nome da Categoria</label>
                        <input type="text" name="name" class="name-categoria">
                    </div>
                    
                    <div class="column-group2">
                        <h1>Inserir Imagem</h1>
                        <div class="row-group">
                            <div class="frame_file">
                                <input type="file" name="imagens" single>
                                <label for="file">Selecionar Arquivo</label>
                            </div>
                            
                            <button type="submit" class="button-confirm">Criar Categoria</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <?php get_footer()?>    
</body>
    <script src=""></script>
</html>