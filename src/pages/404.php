<?php
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
    <?php get_css(['404.css', 'style']) ?>
    <link rel="stylesheet" href="<?=$base_url;?>/assets/css/404.css">
    <title>Eao Quadrado - Nossa Política</title>
</head>

<body>
    <?php get_header() ?>
    <main>
        <div class = 'container404'>
            <h1>Error 404!</h1>
            <p>page not found!</p>
        </div>
    </main>
    <?php get_footer() ?>
</body>

</html>