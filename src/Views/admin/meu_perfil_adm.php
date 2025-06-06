<?php
    $appName = get_app_name();
    $baseUrl = get_base_url();
    $titulo = 'Meu Perfil';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EaoQuadrado</title>
    <?php get_css(['admin/meu_perfil_adm']) ?>
    <?php get_css_components() ?>
</head>
<body>
    <?php get_header(); ?>
    <main>
        <h5 class="map">
            <a href="<?=get_base_url();?>">Home</a><span>/</span><a id="painel" href="<?=get_base_url();?>admin/indexAdm">Painel do Administrador</a><span>/</span><a id="minha-conta" href="<?=get_base_url();?>admin/meuPerfilAdm">Minha conta</a></h5>
         <div id="menu-lateral">
            <div class="info-menu-lateral">
                <h3>Cadastro</h3>
                <a href="<?=get_base_url();?>admin/cadastrarAdm">Cadastrar Novo Administrador</a>
                <a href="<?=get_base_url();?>admin/meuPerfilAdm">Gerenciar Meu Perfil</a>
            </div>
            <div class="info-menu-lateral">
            <h3>Colaboradores</h3>
                <a href="<?=get_base_url();?>admin/validarNovoVendedor  ">Válidar Novo Colaborador</a>
                <a href="link">Colaboradores Aprovados</a>
                <a href="link">Colaboradores Reprovados</a>
                <a href="link">Listar Colaboradores Ativos</a>
                <a href="link">Suporte ao Colaborador</a>
            </div>
            <div class="info-menu-lateral">
            <h3>Clientes</h3>
              <a href="link">Suporte ao Cliente</a>
            </div>
            <div class="info-menu-lateral">
            <h3>Sistema</h3>
                <a href="link">Abrir Chamado</a>
                <a href="link">Criar Categoria</a>
                <a href="link">Editar Sistema</a>
            </div>

        </div>
        <div id="texto-perfil">Bem vindo, John doe!</div>
        <div class="container-info">
            <div class='frame-direita'>
                <h4>Perfil de John Doe</h4>
                <inserir_dados></inserir_dados>
            </div>
            <div class='frame-esquerda'>
                 <img src="<?= get_base_url(); ?>assets/img/foto_cliente.png" alt="foto do cliente">
                 <permissoesAdm></permissoesAdm>
            </div>
        </div>
        <button id="salvar" type="submit" onclick = "window.location.href='<?=get_base_url();?>admin/meuPerfilAdm'" >Salvar</button>
    </main>
    
    <?php get_footer(); ?>    
    
</body>
<script type="module" src="<?= get_base_url(); ?>assets/js/meu_perfil_adm.js?<?= time() ?>"></script>
</html>