<?php 
    include('../../config/funcoes.php');
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php get_css(['base', 'style', '/components/info-vendedor']) ?>
    <title>E ao Quadrado</title>
</head>
<body>
    <?php get_header() ?>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 pb-3">
                        <img src="../assets/img/Banner_loja.png" class="img banner_loja" alt="Banner da Loja">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 pb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="container mtb-1">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-2">
                                            <div class="avatar">
                                                <img src="../assets/img/cliente/studio_center.svg" alt="" class="img-fluid">
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-7 m-auto">
                                            <div class="col-sm-12">
                                                <h2>
                                                    Studio Center
                                                    <i class="fa-regular fa-heart icone"></i>
                                                    <!-- Quando favoritado, usar o ícone abaixo -->
                                                    <!-- <i class="fas fa-heart icone"></i> -->
                                                </h2>
                                            </div>
                                            <div class="col-sm-12">
                                                <a href="mailto:studiocenterpy@gmail.com" class="text">studiocenterpy@gmail.com</a>
                                            </div>
                                            <div class="col-sm-12">
                                                <p class="text">Av. 15 de Agosto, 506, Centro</p>
                                                <p class="text">Campo Grande - MS</p>
                                            </div>
                                            <div class="col-md-hidden col-sm-12 pb-1"></div>
                                        </div>
                                        <div class="col-sm-12 col-md-4 col-lg-3 col-xl-2">
                                            <div class="row">
                                                <div class="col-sm-12 stars">
                                                    <p class="text">
                                                        Avaliações: 
                                                        <i class="fa fa-star icone-star"></i>
                                                        <i class="fa fa-star icone-star"></i>
                                                        <i class="fa fa-star icone-star"></i>
                                                        <i class="fa-regular fa-star icone-star"></i>
                                                        <i class="fa-regular fa-star icone-star"></i>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12 pt-1 contato-container">
                                                    <img class="whatsapp" src="../assets/img/icons/whatsapp.svg" alt="">
                                                    <a target="_blank" class="contato" href="https://wa.me/556734377000">(67) 3437-7000</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>    


    <?php get_footer() ?>
</body>
<script src="../../assets/js/script.js"></script>
</html>