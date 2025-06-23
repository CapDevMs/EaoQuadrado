<?php

$base_url = get_base_url();
$appName = get_app_name();
$titulo = 'Contas Aprovadas e Reprovadas'
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $appName . ' - ' . $titulo ?? '' ?></title>
    <?php get_css(['admin/contas_aprovadas_reprovadas', 'base', 'style', 'sidebar']) ?>
</head>

<body>
    <?php get_header() ?>

    <main>

        <div class="container row geral col-sm-12">
            <?php get_sidebar_admin('contasAprovadasReprovadas') ?>
            <div class="historico col-sm-9">
                <div class="selector col-sm-12">
                    <h1>Histórico de Contas</h1>
                    <div class="status">
                        <button class="btn-status col-sm-3 ativo" id="todos">Todos</button>
                        <button class="btn-status col-sm-3" id="aprovado">Aprovadas</button>
                        <button class="btn-status col-sm-3" id="reprovado">Reprovadas</button>
                    </div>
                </div>


                <div class="container contas col-sm-12">
                    <div class="perfis-body container col-sm-12 row">

                    <validation></validation>

                    </div>
                </div>
            </div>
            
        </div>
    </main>

    <?php get_footer() ?>
</body>
    <script src=" <?= get_base_url(); ?>assets/js/adm/filtro_aprovados.js"></script>
    <script src="<?= get_base_url(); ?>assets/js/script.js"></script>
    <script type="module" src="<?= get_base_url(); ?>assets/js/adm/contas_status.js"></script>

</html>