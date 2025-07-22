<?php
$appName = get_app_name();
$baseUrl = get_base_url();
$titulo = 'Homepage';
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $appName . ' - ' . $titulo ?? '' ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <?php get_css(['tela_inicial', 'components/card-produto', 'style', 'base']) ?>
    <?php get_css_components() ?>
</head>

<body>
    <?php
    get_header();
    ?>

    <main>
        <div class="carrossel">
            <div class="container_carrossel">
                <img class="item_carrossel" src="<?= get_base_url(); ?>assets/img/slide1.png" alt="">
                <img class="item_carrossel" src="<?= get_base_url(); ?>assets/img/slide2.png" alt="">
                <img class="item_carrossel" src="<?= get_base_url(); ?>assets/img/slide3.png" alt="">
            </div>
        </div>


        <button id="prev">&#10094;</button>
        <button id="next">&#10095;</button>
        </div>

        <div class="content_container">
            <div class="categorias_container">
                <div class="frame_container_categoria">
                    <hr class="frame_categoria">
                    <h1>Categorias</h1>
                </div>
                <buttonCategoria class="categorias_button_container"></buttonCategoria>
            </div>

            <div class="container_mosaico">
                <div class="frame_container_categoria">
                    <hr class="frame_categoria">
                    <h1>Lançamentos</h1>
                </div>

                <div class="mosaico row col-sm-12">
                    <img class="col-sm-12 col-md-12 col-xl-6 itens1" src="src/public/assets/img/mosaico1.png" alt="imagem 1 do mosaico" class="itens1" id="item1" onclick="window.location.href='<?= get_base_url(); ?>categoria'"></img> 
                    <div class="col-sm-12 col-md-12 col-xl-6">
                        <img class="col-sm-12 itens2" src="src/public/assets/img/mosaico2.png" alt="imagem 2 do mosaico" class="itens2" id="item2" onclick="window.location.href='<?= get_base_url(); ?>categoria'"></img>
                        <div class="itens3-4 col-sm-12 pt-1">
                            <img class="col-sm-6 itens3" src="src/public/assets/img/mosaico3.png" alt="imagem 3 do mosaico" class="itens3" id="item3" onclick="window.location.href='<?= get_base_url(); ?>categoria'"></img>

                            <img class="col-sm-6 itens4" src="src/public/assets/img/mosaico4.png" alt="imagem 4 do mosaico" class="itens4" id="item4" onclick="window.location.href='<?= get_base_url(); ?>produto'"></img>
                        </div>
                    </div>
                </div>
            </div>


            <div class="produtos_container">
                <div class="frame_container_categoria">
                    <hr class="frame_categoria">
                    <h1>Nossos Produtos</h1>
                </div>
                <card-produto class="row"></card-produto>
            </div>
        </div>
    </main>

    <script src="<?= get_base_url(); ?>assets/js/slider.js"></script>
    <script src="<?= get_base_url(); ?>assets/js/tela_inicial.js" type="module"></script>
    <script src="<?= get_base_url(); ?>assets/js/HomeButtonCategoria.js" type="module"></script>
    <?php get_footer() ?>
</body>
<script src="<?= get_base_url(); ?>assets/js/script.js"></script>


</html>