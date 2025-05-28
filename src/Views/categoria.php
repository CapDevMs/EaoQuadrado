<?php
$appName = get_app_name();
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E ao Quadrado - O melhor E-commerce</title>
    <!-- <title><?= $appName . ' - ' . $titulo ?? '' ?></title> -->
    <?php get_css(['cliente/categoria']) ?>
    <?php get_css(['base', 'style', 'cliente/categoria']) ?>
    <?php get_css_components() ?>
</head>

<body>
    <?php get_header() ?>
    <div class="container-video">
                <video autoplay muted loop>
                    <source src="assets/videos/video-categoria_celular.mp4.mp4" type="video/mp4">
                </video>
    </div>
    <div class="container-main col-sm-10 ">
    <div class="containerLeft col-xl-3">
        <div class="filtroCategoria">filtro</div>
                <!-- <filtroCategoria></filtroCategoria> -->
        </div>
        <div class="containerCategoria row col-sm-12">
            <buttonCategoria class="buttonCategoria"></buttonCategoria>
        </div>
        <div class="containerprodutofav col-xl-10 col-lg-10 col-md-12 ">
                <cardProduto class="cardProduto row "></cardProduto>
        </div>
        

    </div>

    <script type="module" src="assets/js/categoria.js?<?= time(); ?>" defer></script>
    <?php get_footer() ?>
</body>

</html>