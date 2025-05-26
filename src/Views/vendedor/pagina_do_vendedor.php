<?php
    $appName = get_app_name();
    $baseUrl = get_base_url();
    $titulo = 'Página do Vendedor';
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../assets/img/logo.png">
    <?php get_css(['vendedor/pagina_do_vendedor', 'style', 'components/comentario_avaliacao']) ?>

    <title>E ao Quadrado</title>
</head>

<body>
    <?php get_header() ?>

    <main class="container">
        <h4 id="roadmap">Home / Studio Center</h4>
        <img src="../../assets/img/img-pagina-do-vendedor/foto_banner_pagina_vendedor.png" id="foto-banner" alt="foto-banner-vendedor">
        
        <div class="container-comentarios">
            <container-comentarios>
            </container-comentarios>
        </div>
    </main>

    <?php get_footer() ?>
</body>
<script type="module" src="../../assets/js/vendedor/pagina_do_vendedor.js"></script>

</html>