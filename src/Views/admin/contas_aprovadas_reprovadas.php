<?php
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

        <div class="container row col-sm-12">
            <?php get_sidebar_admin('algo') ?>
            <div class="historico col-sm-9">
                <div class="selector col-sm-5">
                    <h1>Histórico de Contas</h1>
                    <div class="status row">
                        <button class="btn-status col-sm-3 ativo" id="todos">Todos</button>
                        <button class="btn-status col-sm-3" id="aprovado">Aprovadas</button>
                        <button class="btn-status col-sm-3" id="reprovado">Reprovadas</button>
                    </div>
                </div>


                <div class="container col-sm-9">
                    <div class="perfis-body container col-sm-12 row">


                    <validation></validation>


                        <!-- <div class="table col-sm-12 row">
                            <div class="interior container col-sm-10">
                                <div class="perfil col-sm-12 mlr-1" id="approved">
                                    <div class="foto-container col-sm-12 col-xl-2">
                                        <img src="<?= get_base_url() ?>assets\img\foto-perfil.png" alt="foto-perfil">
                                    </div>
                                    <div class="col-sm-12 col-xl-5 ">
                                        <h1>Carlos Santana da Silva</h1>
                                        <p>carlos_silva@gmail.com</p>
                                    </div>
                                    <div class="aprovado col-sm-12 col-xl-5">
                                        <img src="<?= get_base_url() ?>assets\img\icons\icon-checkbox.png" alt="">
                                        <p>Reprovado em 27/09/2020</p>
                                    </div>
                                </div>
                            </div>

                            <div class="visualizar col-sm-2">
                                <div class="btn-perfil col-sm-10 ml-1 container">
                                    <a>Visualizar Perfil</a>
                                </div>

                            </div>


                        </div>

                        <div class="table col-sm-12 row">
                            <div class="interior container col-sm-10">
                                <div class="perfil col-sm-12 mlr-1" id="repproved">
                                    <div class="foto-container col-sm-12 col-xl-2">
                                        <img src="<?= get_base_url() ?>assets\img\foto-perfil.png" alt="foto-perfil">
                                    </div>
                                    <div class="col-sm-12 col-xl-5 ">
                                        <h1>Carlos Santana da Silva</h1>
                                        <p>carlos_silva@gmail.com</p>
                                    </div>
                                    <div class="aprovado col-sm-12 col-xl-5">
                                        <img src="<?= get_base_url() ?>assets\img\icons\icon-cancel.svg" alt="">
                                        <p>Reprovado em 27/09/2020</p>
                                    </div>
                                </div>
                            </div>

                            <div class="visualizar col-sm-2">
                                <div class="btn-perfil col-sm-10 ml-1 container">
                                    <a class="link-perfil href=" <?= get_base_url(); ?>#" ">Visualizar Perfil</a>
                                </div>
                                
                            </div>


                        </div> -->
                    </div>
                </div>
            </div>
            
        </div>
    </main>

    <?php get_footer() ?>
</body>
    <script src=" ../../assets/js/adm/filtro_aprovados.js"></script>
    <script src="<?= get_base_url() ?>/assets/js/script.js"></script>
    <script src="<?= get_base_url() ?>/assets/js/adm/contas_status"></script>

</html>