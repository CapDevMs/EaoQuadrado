<?php
    include('../../config/funcoes.php');
    $appName = get_app_name();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title><?= $appName . ' - ' . $titulo ?? '' ?></title> -->
    <title>E ao Quadrado - Favoritos</title>
    <?php get_css(['cliente/favoritos_cliente']) ?>
    <?php get_css_components() ?>
</head>
<body>

    <?php get_header() ?>

    <main>
        <div class="sidebar-menu">
            <div class="roadmap">
                <ul class="breadcrumb-list">
                    <li class="breadcrumb-item">
                        <a href="../../src/index.php" class="breadcrumb-link">Home</a>
                    </li>
                    <li class="breadcrumb-item-separador">/</li>
                    <li class="breadcrumb-item">
                        <a href="#" class="breadcrumb-link" id="favorite">Favoritos</a>
                    </li>
                </ul>
            </div>
    <div class="title-fav-produtos">Produtos Favoritos</div>
    <div href="#" class="btn mover-tudo-carrinho">Mover tudo para o carrinho</div>
    <div class="card-produto col-sm-12 col-md-6 col-lg-4 col-xl-3">
        <div class="card-body pb-1">
            <div class="row">
                <div class="col-sm-11">
                    <a href="${link}">
                        <img class="img-produto" src="../../assets/img/computador.png">
                    </a>
                </div>
                <div class="col-sm-1 pt-2">
                    <a href="#">
                        <img class="icone-carrinho" src="../../assets/img/carrinho2.svg"></img>
                    </a>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <div class="row">
                <div class="col-sm-12">
                <div class="col-sm-6">
                    <a href="#" class="btn-add-carrinho">Adicione ao Carrinho</a>
                </div>
                    <div class="container-nome-produto">
                        <h3 class="nome-produto">ASUS Notebook Gamer</h3>
                    </div>
                    <div class="container-preco-produto">
                        <h3 class="preco-produto">R$960</h3>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

    <div class="title-fav-vendedores">vendedores Favoritos</div>
    <div class="card-produto col-sm-12 col-md-6 col-lg-4 col-xl-3">
        <div class="card-body pb-1">
            <div class="row">
                <div class="col-sm-11">
                    <a href="${link}">
                        <img class="img-produto" src="../../assets/img/loja-favorita.png">
                    </a>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <div class="row">
                <div class="col-sm-12">
                <div class="col-sm-6">
                    <a href="#" class="btn-visitar-loja">Visitar loja</a>
                </div>
                    <div class="container-nome-produto">
                        <h3 class="nome-produto">ASUS Notebook Gamer</h3>
                    </div>
                    <div class="container-preco-produto">
                        <h3 class="preco-produto">R$960</h3>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

    </main>

    <?php get_footer() ?>
</body>
<script src="../../assets/js/script.js"></script>
</html>