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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
    <?php get_css(['filtro_categoria', 'cliente/categoria']) ?>
    <?php get_css(['style', 'base','cliente/categoria']) ?>
    <?php get_css_components() ?>
</head>

<body>
    <?php get_header() ?>
    <div class="container-video">
                <video autoplay muted loop>
                    <source src="assets/videos/video-categoria_celular.mp4.mp4" type="video/mp4">
                </video>
    </div>

    <div class="container-main col-sm-12 ">
        <div class="containerLeft col-sm-2">
            <filtroComponent></filtroComponent>
        </div>
        <div class="containerCategoria row col-sm-12">
            <buttonCategoria class="buttonCategoria"></buttonCategoria>
        </div>
        <div class="containerprodutofav col-xl-10 col-lg-10 col-md-12 ">
                <cardProduto class="cardProduto row "></cardProduto>
        </div>
        

    </div>

    <script type="module" src="assets/js/categoria.js?<?= time(); ?>" defer></script>
    <script type="module" src="<?= get_base_url(); ?>assets/js/filtroCategoria.js"></script>
    <?php get_footer() ?>
</body>

</html>