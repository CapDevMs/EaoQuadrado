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
    <main>
        <div class="container-video">
                <video autoplay muted loop>
                    <source src="assets/videos/video-categoria_celular.mp4.mp4" type="video/mp4">
                </video>
        </div>
        <div class="card-produto"></div>

    </main>

    <script type="module" src="assets/js/categoria.js?<?= time(); ?>" defer></script>
    <?php get_footer() ?>
</body>

</html>