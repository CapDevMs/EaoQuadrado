<?php
$appName = get_app_name();
$baseUrl = get_base_url();
$titulo = 'Chamados';
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php get_css(['sidebar','base', 'style', '/vendedor/troca_devolucao_cancelamento']) ?>
    <title>E ao Quadrado</title>
</head>

<body>
    <?php get_header() ?>

    <main>
        <div class="container-main">
            <asside class="col-l-3 col-md-hidden col-sm-hidden">
                <?php get_sidebar_vendedor('historico_vendas'); ?>
            </asside>
            <div class="coluna-conteudo">
                <div class="grid-cols-5 container-metade">
                    <div class="grid-itens">
                        <b>Chamados</b>
                    </div>
                    <div class="grid-itens active">
                        <a href="#" class="">Todos</a>
                    </div>
                    <div class="grid-itens">
                        <a href="#" class="">Troca</a>
                    </div>
                    <div class="grid-itens">
                        <a href="#" class="">Devolução</a>
                    </div>
                    <div class="grid-itens">
                        <a href="#" class="">Cancelamento</a>
                    </div>
                </div>
                <div class="card">
                    <div class="card-items" data-status="troca">
                        <div class="card-inside">
                            <div class="card-header">
                                <div class="img-card">
                                    <img src="../../assets/img/person.svg" alt="">
                                </div>
                                <div class="nome-card">
                                    <p>Mario Renato</p>
                                </div>
                                <div class="tipo-card troca">
                                    <p>Troca</p>
                                </div>
                            </div>
                            <div class="card-meio"></div>
                            <div class="card-body">
                                <p class="card-text">
                                    Motivo: Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Rerum, rem omnis. Unde commodi laborum quod a quae quis tenetur.
                                    Nesciunt, id magnam. Iste nam eos sed, illo maiores dicta labore.
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Rerum, rem omnis. Unde commodi laborum quod a quae quis tenetur.
                                    Nesciunt, id magnam. Iste nam eos sed, illo maiores dicta labore.
                                </p>
                            </div>
                        </div>
                        <div class="card-inside">
                            <div class="card-header">
                                <div class="img-card">
                                    <img src="../../assets/img/person.svg" alt="">
                                </div>
                                <div class="nome-card">
                                    <p>Mario Renato</p>
                                </div>
                                <div class="tipo-card devolucao">
                                    <p>Devolução</p>
                                </div>
                            </div>
                            <div class="card-meio"></div>
                            <div class="card-body">
                                <p class="card-text">
                                    Motivo: Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Rerum, rem omnis. Unde commodi laborum quod a quae quis tenetur.
                                    Nesciunt, id magnam. Iste nam eos sed, illo maiores dicta labore.
                                </p>
                                <p class="card-text">
                                    Motivo: Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Rerum, rem omnis. Unde commodi laborum quod a quae quis tenetur.
                                    Nesciunt, id magnam. Iste nam eos sed, illo maiores dicta labore.
                                </p>
                            </div>
                        </div>
                        <div class="card-inside">
                            <div class="card-header">
                                <div class="img-card">
                                    <img src="../../assets/img/person.svg" alt="">
                                </div>
                                <div class="nome-card">
                                    <p>Mario Renato</p>
                                </div>
                                <div class="tipo-card cancelamento">
                                    <p>Cancelamento</p>
                                </div>
                            </div>

                            <div class="card-body">
                                <p class="card-text">
                                    Motivo: Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Rerum, rem omnis. Unde commodi laborum quod a quae quis tenetur.
                                    Nesciunt, id magnam. Iste nam eos sed, illo maiores dicta labore.
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Rerum, rem omnis. Unde commodi laborum quod a quae quis tenetur.
                                    Nesciunt, id magnam. Iste nam eos sed, illo maiores dicta labore.
                                </p>
                            </div>
                        </div>
                        <div class="card-inside finalizado">
                            <div class="card-header">
                                <div class="img-card">
                                    <img src="../../assets/img/person.svg" alt="">
                                </div>
                                <div class="nome-card">
                                    <p>Mario Renato</p>
                                </div>
                                <div class="tipo-card encerrado">
                                    <p>Cancelamento</p>
                                </div>
                            </div>
                            <div class="card-meio"></div>
                            <div class="card-body">
                                <p class="card-text">
                                    Motivo: Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Rerum, rem omnis. Unde commodi laborum quod a quae quis tenetur.
                                    Nesciunt, id magnam. Iste nam eos sed, illo maiores dicta labore.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <<?php get_footer() ?>
</body>
<script src="../../assets/js/script.js"></script>

</html>