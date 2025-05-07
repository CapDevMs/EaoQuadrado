<?php

$appName = get_app_name();
$titulo = 'Homepage';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $appName . ' - ' . $titulo ?? '' ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <?php get_css(['tela_inicial', 'components/card-produto']) ?>
    <?php get_css_components() ?>
</head>
<body>
    <?php
        get_header();
    ?>

    <main>
        <div class="carrossel">
            <div class="container_carrossel">

                <div class="item_carrossel">
                    <div class="bg_carrossel">
                    </div>
                    <img src="<?= get_base_url(); ?>/assets/img/slide1.png" alt="">
                    <div class="text_carrossel">
                        <h1>Aproveite o melhor dos games!</h1>
                        <a href="<?= get_base_url(); ?>/pages/produto.php">Compre Agora <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                
                <div class="item_carrossel">
                    <div class="bg_carrossel"></div>
                    <img src="<?= get_base_url(); ?>/assets/img/slide2.png" alt="">
                    <div class="text_carrossel">
                        <h1>Confira os melhores celulares!</h1>
                        <a href="<?= get_base_url(); ?>/pages/produto.php">Compre Agora <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>

                <div class="item_carrossel">
                    <div class="bg_carrossel"></div>
                    <img src="<?= get_base_url(); ?>/assets/img/slide3.png" alt="">
                    <div class="text_carrossel">
                        <h1>Aproveite nossa coleção feminina!</h1>
                        <div class="link">
                            <a href="<?= get_base_url(); ?>/pages/produto.php">Compre Agora</a>
                            <i class="fas fa-arrow-right"></i> 
                        </div>
                        
                    </div>
                </div>


            </div>
        </div>
    
        
        <button id="prev">&#10094;</button>
        <button id="next">&#10095;</button>
    </div>
        <div class="frame_container_categoria">
            <hr class="frame_categoria">
            <h1>Lançamentos</h1>
        </div>

        
        <div class="mosaico">
            <div class="itens1" id="item1">
                <div class="texto">
                    <h1>PlayStation 5</h1>
                    <p>Versão em preto e branco do PS5 chegando à venda</p>
                    <h1><a href="<?= get_base_url(); ?>/pages/produto.php" class="link_mosaico">Compre Agora!</a><h1>
                </div>
            </div>
            <div class="itens2" id="item2">
                <div class="texto">
                    <h1>Roupas</h1>
                    <p>Coleções  em destaque que dão outra vibe<p>
                    <h1><a href="<?= get_base_url(); ?>/pages/produto.php" class="link_mosaico">Compre Agora!</a><h1>
                </div>
            </div>
            <div class="itens3" id="item3">
                <div class="texto">
                    <h1>Caixa de Som</h1>
                    <p>Alto-falantes sem fio</p>
                    <h1><a href="<?= get_base_url(); ?>/pages/produto.php" class="link_mosaico">Compre Agora!</a><h1>
                </div>
            </div>

            <div class="itens4" id="item4">
                <div class="texto">
                    <h1>Bolsa</h1>
                    <p>GUCCI INTENSE </p>
                    <h1><a href="<?= get_base_url(); ?>/pages/produto.php" class="link_mosaico">Compre Agora!</a><h1>
                </div>
            </div>
        </div>


        <div class="frame_container_categoria">
            <hr class="frame_categoria">
            <h1>Categorias</h1>
        </div>
        
        <div class="categorias_container">
            <div class="categoria" href="#"><img src="<?= get_base_url(); ?>/assets/img/computer_icon.svg" alt="celulares"><p>Eletrônicos</p></div>
            <div class="categoria" href="#"><img src="<?= get_base_url(); ?>/assets/img/dress_icon.svg" alt="computer"><p>Moda</p></div>
            <div class="categoria" href="#"><img src="<?= get_base_url(); ?>/assets/img/home_icon.svg" alt="smartwatches"><p>Casa</p></div>
            <div class="categoria" href="#"><img src="<?= get_base_url(); ?>/assets/img/ball_icon.svg" alt="cameras"><p>Sports</p></div>
            <div class="categoria" href="#"><img src="<?= get_base_url(); ?>/assets/img/ring_icon.svg" alt="headphone"><p>Acessorios</p></div>
            <div class="categoria" href="https://teams.microsoft.com/v2/"><img src="<?= get_base_url(); ?>/assets/img/games_icon.svg" alt="games"><p>Entretenimento</p></div>
        </div>

        <div class="frame_container_categoria">
            <hr class="frame_categoria">
            <h1>Vendedor Destaque</h1>
        </div>

        <div class="img_container">
            <img src="<?= get_base_url(); ?>/assets/img/Banner_loja.png" class="img" alt="Banner da Loja">
        </div>

        <div class="frame_container_categoria">
            <hr class="frame_categoria">
            <h1>Nossos Produtos</h1>
        </div>

        <div class="container">
            <card-produto class="row"></card-produto>
        </div>

        
        </section>
    </main>

    <script src="<?= get_base_url(); ?>/assets/js/slider.js"></script>
    <script src="<?= get_base_url(); ?>/assets/js/tela_inicial.js" type="module"></script>
    
    <?php get_footer() ?>
</body>
<script src="<?= get_base_url(); ?>/assets/js/script.js"></script>
<script>
    const base_url = '<?= get_base_url(); ?>';
    const categorias = document.querySelectorAll('.categoria');

    console.log(categorias);

    categorias.forEach(categoria => {
        categoria.addEventListener('click', () => location = base_url + '/pages/categoria.php')
    });
</script>
</html>