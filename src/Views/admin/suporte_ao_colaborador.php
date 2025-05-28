<?php
$titulo = 'Suporte';
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/footer.css">
    <?php get_css(['sidebar', 'suporte_ao_colaborador', 'base', 'style']) ?>
    <title>Eao Quadrado</title>
</head>

<body>
    <?php get_header() ?>

    <main>
        <div class="roadmap">Home / Painel do Administrador / Suporte ao Colaborador</div>
        <div class="container col-sm-12">
            <?php get_sidebar_admin('suporte_colaborador') ?>
            <div>
            </div class="row">
            <div class="chamados col-sm-12">
                <h1>Chamados:</h1>
                <button id="selected">Todas</button>
                <button>Não Lidas</button>
                <button>Respondidas</button>
            </div>

            <div class="container-accordion">
                <suporteInfo></suporteInfo>
            </div>
        </div>
        </div>
    </main>
    <?php get_footer() ?>
</body>
<script src="<?php get_base_url() ?>assets/js/colaborador_sub.js"></script>
<script type="module" src="<?= get_base_url(); ?>assets/js/suporteAdm.js"></script>

</html>