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
    <?php get_css(['cadastros/esqueci-senha']) ?>
</head>
<body>
    <?php get_header() ?>
<main>
    <div class="menu" id="home">Home</div>
    <span class="menu">/</span>
    <div class="menu">Esqueci a Senha</div>
    <div id="sub-menu"><h4>Esqueci a Senha</h4></div>
    <div id="titulo">Informe o Email cadastrado</div>
    <div class="container">
    <form action="#" method="post">
    <div id="email">Email</div>
    <textarea id="texto-digitado" placeholder="johndoe@gmail.com" name="preco-produto" rows="2"></textarea><br><br>
    <button type="submit">Recuperar Senha</button>
    </form>
    <img src="../../assets/img/esqueci-senha.png " alt="esqueci-senha" id="esqueci">
    </div>
</main>
    <?php get_footer() ?>
</body>
<script src="../../assets/js/script.js"></script>
</html>