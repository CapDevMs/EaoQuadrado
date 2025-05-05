<?php
http_response_code(404);
include('../config/funcoes.php');
$appName = get_app_name();
?>
<?php
$base_url = get_base_url();
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php get_css(['base.css', 'style']) ?>
    <link rel="stylesheet" href="<?=$base_url;?>/assets/css/404.css">
    <title>Eao Quadrado - Página nao encontrada</title>
</head>

<body>
    <?php get_header() ?>
    <main>
        <div class = 'container404'>
            <h1>Erro 404</h1>
            <p>página não encontrada.</p>
        </div>
    </main>
    <?php get_footer() ?>
</body>

</html>