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
$appName = get_app_name();
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E ao Quadrado - O melhor E-commerce</title>
    <!-- <title><?= $appName . ' - ' . $titulo ?? '' ?></title> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
    <?php get_css_components() ?>
    <?php get_css([ 'cliente/categoria', 'components/filtro_categoria', 'style', 'base']); ?>
</head>

<body>
    <?php get_header() ?>
    <div class="container-img">
                <img src="<?= get_base_url(); ?>assets/img/produtos_categorias.jpg">
    </div>

    <div class="container-main col-sm-12 ">
        <div class="containerLeft col-sm-2 col-sm-hidden">
            <filtroComponent></filtroComponent>
        </div>
        <div class="containerRight col-sm-11 col-md-9 pt-1">

            <div class="containerprodutofav col-sm-12 col-md-11">
                    <cardProduto class="cardProduto row "></cardProduto>
            </div>
        </div>
        
    </div>

    <script type="module" src="<?= get_base_url(); ?>assets/js/script.js" defer></script>
    <script type="module" src="<?= get_base_url(); ?>assets/js/categoria.js" defer></script>
    <?php get_footer() ?>
</body>
</html>