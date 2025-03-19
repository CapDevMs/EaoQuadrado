<?php
    include('../../config/funcoes.php');
    $appName = get_app_name();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $appName . ' - ' . $titulo ?? '' ?></title>
    <?php get_css(['admin/index_adm']) ?>
</head>
<body>
    <?php get_header() ?>

    <main>
        <div><h6>Painel do Administrador</h6></div>
        <div class="grid-container">
            <button class="btn btn1">Botão 1</button>
            <button class="btn">Botão 2</button>
            <button class="btn">Botão 3</button>
            <button class="btn btn4"><img src="../../assets/img/imagem-abrir-chamado.png" alt=""></button>
            <button class="btn btn5">Botão 5</button>
            <button class="btn btn6">Botão 6</button>
        </div>
    </main>

    <?php get_footer() ?>
</body>
<script src="../../assets/js/script.js"></script>
</html>