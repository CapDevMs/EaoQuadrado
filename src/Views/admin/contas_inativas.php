<?php

$appName = get_app_name();
$titulo = 'EaoQuadrado - Contas Inativas';
?>
<?php
$base_url = get_base_url();
?>
<!-- <?= $base_url; ?> -->
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $appName . ' - ' . $titulo ?? '' ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <?php get_css(['style', 'base', 'admin/contas_inativas', 'sidebar']) ?>
</head>

<body>
    <?php
    get_header();
    ?>

    <main>
        <roadMap class='mt-1 mb-1 ml-1 roadMap'>
            <a href="#" class='roadMap1'>Home /</a>
            <a href="#" class='roadMap1'>Painel do administrador /</a>
            <a href="#" class='roadMap2'>Contas inativas</a>
        </roadMap>
        <corpo class='corpo col-12 row'>
            <menuLateral class='col-md-3 col'>

                <?php get_sidebar_admin('contas_inativas'); ?>
            </menuLateral>
            <conteudo class='col-md-9 col-12'>
                <painel class='painel painelPrincipal col-md-12'>

                    <ContaSuspensa class='painel painelCentral col-12 centralizar mt-3 acordeonAberto'>
                        <div class='painelCinza'>
                            <div class='col-1'>
                                <img src="src/public/assets/img/foto-perfil.png" alt="foto-perfil" class='imagem'>
                            </div>
                            <div class="col-sm-7">Nome da empresa</div>
                            <div class="status1 col-sm-2">Suspenso</div>
                            <div type='button' class="botao col-sm-2" onclick="abrirAcordeon()">Reativar</div>
                        </div>
                        <hr>
                        <div class = 'campoTexto'>
                            <div class = 'TextBox'>Justificativa: Grande quantidade de reclamações referente a entrega incorreta de produtos. Suspenso para revisão.</div>
                        </div>
                    </ContaSuspensa>

                    <ContaDesativada type="button" class='painel painelCentral col-12 centralizar mt-3 acordeonFechado' onclick="abrirAcordeon()">
                        <div></div>
                        <div></div>
                    </ContaDesativada>

                </painel>
            </conteudo>
        </corpo>

    </main>
    <?php get_footer() ?>
</body>

<script>
    function abrirAcordeon() {
        console.log('NUOOOOOOOOOOOOOOOOOOOOOOOOOOSSA')
    };
</script>

</html>