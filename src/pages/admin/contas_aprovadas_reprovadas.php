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
    <?php get_css(['admin/contas_aprovadas_reprovadas', 'base', 'style']) ?>
</head>
<body>
    <?php get_header() ?>

    <main>
        <div class="geral container">
            <div class="selector container mr-0 col-sm-3 ">
                <h1>Histórico de Contas</h1>
                <div class="status row">
                    <button class="btn-status col-sm-3 ativo" id="todos">Todos</button>
                    <button class="btn-status col-sm-3" id="aprovado">Aprovadas</button>
                    <button class="btn-status col-sm-3" id="reprovado">Reprovadas</button>
                </div>
            </div>

            
            <div class="container col-sm-9">
                <div class="perfis-body container col-sm-12 row">
                    <div class="perfil col-sm-10 row">
                        <div class="col-sm-12 col-xl-2">
                            <img src="" alt="foto-perfil">
                        </div>
                        <div class="col-sm-12 col-xl-5 row">
                            <h1>Nome</h1>
                            <p>email</p>
                        </div>
                        <div class="col-sm-12 col-xl-5 row">
                            <img src="" alt="">
                            <p>Aprovado</p>
                        </div>
                    </div>

                    <div class="visualizar col-sm-2">
                        <button>Visualizar Perfil</button>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php get_footer() ?>
</body>
<script src="../../assets/js/adm/button_style.js"></script>
<script src="<?= get_base_url() ?>/assets/js/script.js"></script>
</html>