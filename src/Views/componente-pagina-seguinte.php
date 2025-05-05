<?php
include('../config/funcoes.php');
$appName = get_app_name();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E ao Quadrado - O melhor E-commerce</title>
    <!-- <title><?= $appName . ' - ' . $titulo ?? '' ?></title> -->
    <?php get_css(['base', 'style','components/pagina-seguinte-componente']) ?>
    <?php get_css_components() ?>
</head>

<body>
    <main>
        <pagina-seguinte class= "pagina-seguinte"></pagina-seguinte>
    </main>  
    <script type="module" src="../assets/js/pagina-seguinte.js?<?= time(); ?>"></script>
    <?php get_footer() ?>
</body>

