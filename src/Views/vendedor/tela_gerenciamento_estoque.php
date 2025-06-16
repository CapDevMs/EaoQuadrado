<?php
    $appName = get_app_name();
    $baseUrl = get_base_url();
    $titulo = 'Gerenciamento de Estoque';
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <?php get_css(['base', 'style', 'vendedor/tela_gerenciamento_estoque', '']) ?>
    <?php get_css_components()?>
    <title>Document</title>
</head>
<body>
    <?php get_header(); ?>

    <main class="coluna-menu">
        <div>
            <div id="roadmap" class="pt-2 pb-3">
                <span>Home </span>/
                <span><b>Gerenciamento de Estoque</b></span>
            </div>
                

            <div class="container">
                <componenteEstoqueContainer></componenteEstoqueContainer>
            </div>
            <div id="div-btn">
                <button class="btn" id="btn1">Excluir</button>

                <button class="btn" id="btn2">Adicionar Produto</button>
            </div>
        </div>
    </main>
    
    <?php get_footer(); ?>
</body>
    <script type="module" src="<?= get_base_url(); ?>assets/js/vendedor/gerenciamento_estoque.js?<?= time() ?>"></script>
</html>