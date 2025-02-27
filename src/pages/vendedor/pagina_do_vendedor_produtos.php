<?php
    include('../../config/funcoes.php');
    $appName = get_app_name();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/base.css">
    <link rel="stylesheet" href="../../assets/css/vendedor/pagina_do_vendedor.css">
    <link rel="shortcut icon" href="../../assets/img/logo.png">
    <?php get_css(['vendedor/pagina_do_vendedor_produtos', 'styles']) ?>

    <title>E ao Quadrado</title>
</head>

<body>
    <?php get_header() ?>

    <main class="container">

        <h1>Componente de Comentários</h1>


    </main>

    <?php get_footer() ?>
</body>
<script src="../../assets/js/script.js"></script>

</html>