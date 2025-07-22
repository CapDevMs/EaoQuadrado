<?php

if (isset($_GET['id'])) {
    $produtoId = $_GET['id'];
    ?>
    <script>
        const idPego = <?= json_encode($produtoId); ?>;
    </script>
    <?php
    
} else {
    
}
?>
<?php


$appName = get_app_name();
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EaoQuadrado</title>
    <?php get_css(['produto']) ?>
    <?php get_css_components() ?>
    <?php get_breadcrumbs() ?>
</head>

<body>
    <?php get_header(); ?>
    <main>
        <div class="container">
            <?php
            breadcrumb(array('http://localhost/EaoQuadrado' => 'Home', 'produto' => 'Produto'));
            ?>
            <div class="tela-produto"></div>
        </div>
    </main>

    <?php get_footer(); ?>

</body>
    <script>
        const listaProdutosJS = <?= json_encode($listaProdutos); ?>;
        const listaVendedoresJS = <?= json_encode($listaVendedores); ?>;
    </script>
<script src="<?= get_base_url(); ?>assets/js/script.js"></script>
<script type="module" src="<?= get_base_url(); ?>assets/js/produto.js?<?= time() ?>"></script>

</html>