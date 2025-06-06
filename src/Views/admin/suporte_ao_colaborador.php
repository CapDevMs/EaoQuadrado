<?php
$titulo = 'Suporte';
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php get_css(['sidebar', 'suporte_ao_colaborador', 'base', 'style']) ?>
    <title>Eao Quadrado</title>
</head>

<body>
    <?php get_header() ?>

    <main>
        <div class="roadmap">Home / Painel do Administrador / Suporte ao Colaborador</div>
        <div class="container row col-sm-12">
            <?php get_sidebar_admin('suporte_colaborador') ?>
            <div class="row content container col-sm-12 col-xl-10">
                <div class="chamados col-sm-12">
                    <h1 class="col-sm-3">Chamados:</h1>
                    <button class="col-sm-3" id="selected">Todas</button>
                    <button class="col-sm-3">Não Lidas</button>
                    <button class="col-sm-3">Respondidas</button>
                </div>

                <div class="container-accordion col-sm-12 col-xl-8">
                    <suporteInfo id="suporteInfo"></suporteInfo>
                </div>
           </div>
        </div>
    </main>
    <?php get_footer() ?>
</body>
<script src="<?php get_base_url() ?>assets/js/colaborador_sub.js"></script>
<script type="module" src="<?= get_base_url(); ?>assets/js/suporteAdm.js"></script>

</html>