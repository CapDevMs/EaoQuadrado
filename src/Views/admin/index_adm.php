<?php
    $appName = get_app_name();
    $baseUrl = get_base_url();
    $titulo = 'Homepage - Administrador';
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
            <button class="btn" id="btn1" onclick = "window.location.href='<?=get_base_url();?>admin/listaVendedores'"><img src="<?=get_base_url();?>assets/img/imagem-colaboradores.png " alt="" id="botao1" class="imagens"></button>
            <!-- <button class="btn" id="btn2" onclick = "window.location.href='<?=get_base_url();?>admin/contasAprovadasReprovadas'"><img src="<?=get_base_url();?>assets/img/imagem-historico.png " alt="" class="imagens"></button>
            <button class="btn" id="btn3" onclick = "window.location.href='<?=get_base_url();?>admin/contasInativas'"><img src="<?=get_base_url();?>assets/img/imagem-contas-inativas.png " alt="" class="imagens"></button>
            <button class="btn" id="btn4" onclick = "window.location.href='<?=get_base_url();?>admin/suporteColaborador'"><img src="<?=get_base_url();?>assets/img/imagem-abrir-chamado.png" alt="" class="imagens"></button>
            <button class="btn" id="btn5" onclick = "window.location.href='<?=get_base_url();?>admin/NãoExisteMaisTiraIssoPeloAmorDeQualquerDeus'"><img src="<?=get_base_url();?>assets/img/imagem-editar-sistema.png " alt="" class="imagens" id="botao5"></button>
            <button class="btn" id="btn6" onclick = "window.location.href='<?=get_base_url();?>admin/suporteColaborador'"><img src="<?=get_base_url();?>assets/img/imagem-suporte.png " alt="" class="imagens"></button> -->
        </div>
    </main>

    <?php get_footer() ?>
</body>
<script src="<?=get_base_url();?>assets/js/script.js"></script>
</html>