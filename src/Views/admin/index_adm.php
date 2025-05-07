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
            <button class="btn" id="btn1"><img src="../../assets/img/imagem-colaboradores.png " alt="" id="botao1" class="imagens"></button>
            <button class="btn" id="btn2"><img src="../../assets/img/imagem-historico.png " alt="" class="imagens"></button>
            <button class="btn" id="btn3"><img src="../../assets/img/imagem-contas-inativas.png " alt="" class="imagens"></button>
            <button class="btn" id="btn4"><img src="../../assets/img/imagem-abrir-chamado.png" alt="" class="imagens"></button>
            <button class="btn" id="btn5"><img src="../../assets/img/imagem-editar-sistema.png " alt="" class="imagens" id="botao5"></button>
            <button class="btn" id="btn6"><img src="../../assets/img/imagem-suporte.png " alt="" class="imagens"></button>
        </div>
    </main>

    <?php get_footer() ?>
</body>
<script src="../../assets/js/script.js"></script>
</html>