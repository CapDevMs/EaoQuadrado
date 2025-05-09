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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <?php get_css(['cliente/categoria']) ?>
    <?php get_css(['base', 'style', 'cliente/categoria']) ?>
    <?php get_css_components() ?>
</head>

<body>
    <?php get_header() ?>
    <main>
        <div class="container-video">
            <div class="video-celular ">
                <video autoplay muted loop>
                    <source src="assets/videos/video-categoria_celular.mp4.mp4" type="video/mp4">
                </video>
            </div>
        </div>>
        <div class="container-title-categoria-video">
            <div class="container-white"></div>
            <div class="marcador-titulo">
                <p class="titulo-categoria-video">Celular</p>
            </div>
        </div>
        <div class="container-info ">
            <div id="filtro"></div>
            <div class="container-meio ">
                    <div class="container-title-categoria">
                        <div class="container-green"></div>
                        <div class="marcador-titulo">
                            <p class="titulo-categoria">Celular</p>
                        </div>
                    </div>
                <button-categoria class="button-categoria"></button-categoria>
                <div class="card-produto"></div>
            </div>
            </div>
        </div>

    </main>

    <script type="module" src="assets/js/categoria.js?<?= time(); ?>" defer></script>
    <?php get_footer() ?>
</body>

</html>