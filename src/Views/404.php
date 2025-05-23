<?php

$appName = get_app_name();
$titulo = 'Erro 404 - Página não encontrada';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $appName . ' - ' . $titulo ?? '' ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <?php get_css(['style', 'base', '404']) ?>
</head>
<body>
    <?php
        get_header();
    ?>

    <main>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="text-center">
                        <h1 class="text-danger pt-4">Página não encontrada</h1>
                        <p class="text-muted">Desculpe, a página que você está procurando não existe ou foi removida.</p>
                        <div class="pt-4">
                            <a href="<?= get_base_url();?>" class="btn btn-primary">Voltar para a página inicial</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php get_footer() ?>
</body>
</html>