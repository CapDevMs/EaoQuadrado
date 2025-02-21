<?php
include(__DIR__ . '/../config/funcoes.php');
$appName = get_app_name();
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $appName . ' - ' . $titulo ?? '' ?></title>
    <?php get_css(['cliente/pagina_vendedor']) ?>
</head>

<body>
    <?php get_header(); ?>

    <main class="row">
        <!-- <asside class="sidebar col-3 col-sm-hidden">
            <div class="container">
                <span>Local para receber o sidebar</span>
            </div>
        </asside>  -->

        <section class="col-12">
            <div class="container">
                <div class="row">
                    <div class="col-12 pb-3">
                        <img src="../assets/img/Banner_loja.png" class="img" alt="Banner da Loja">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 pb-4">
                        <div class="card">
                            <div class="card-body justify-content-center ptb-2">
                                <div class="col-2 justify-content-center">
                                    <div class="avatar">
                                        <img src="../assets/img/cliente/studio_center.svg" alt="" class="figure-img img-fluid">
                                    </div>
                                </div>
                                <div class="col-7">
                                    <div class="row">
                                        <div class="col-12">
                                            <h2>Studio Center</h2>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <a href="mailto:studiocenterpy@gmail.com">studiocenterpy@gmail.com</a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <p>Av. 15 de Agosto, 506, Centro</p>
                                            <p>Campo Grande - MS</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="row">
                                        <div class="col-12 text-right stars">
                                            <p class="mr-1">Avaliações: </p>
                                            <p class="card_estrela_texto estrela_30">★★★★★</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 text-right">
                                            <img class="whatsapp" src="../assets/img/icons/whatsapp.svg" alt="">
                                            <a target="_blank" href="https://wa.me/556734377000">(67) 3437-7000</a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 icone float-right">
                                            <img src="../assets/img/icons/coracao.svg" alt="" class="icone_selecionado">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="content-header-section">
                            <div class="block-green"></div>
                            <p class="text-primary">Nossos Produtos</p>
                        </div>
                    </div>
                </div>

                <div class="row ptb-2">
                    <div class="col-3">
                        <div class="card">
                            <div class="card-body ptb-1 plr-1">
                                <div class="container-foto">
                                    <img class="img-produto" src="../../assets/img/imgs-produtos/racao.avif">
                                </div>
                                <div class="container-coracao-carrinho">
                                    <img class="icones-coracao-carrinho" src="../../assets/img/icone-coracao.svg" alt="like" />
                                    <img class="icones-coracao-carrinho" src="../../assets/img/icone-carrinho.svg" alt="cart" />
                                </div>
                                <div class="container-nome-produto">
                                    <h3 class="nome-produto">Ração Cachorro Pedigree 20kg</h3>
                                </div>
                                <div class="container-preco-produto">
                                    <h3 class="preco-produto">R$119,90</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                </div>

            </div>
        </section>
    </main>


    <?php get_footer(); ?>
</body>

</html>