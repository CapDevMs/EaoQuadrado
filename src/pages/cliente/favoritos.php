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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>E ao Quadrado - Favoritos</title>
    <?php get_css(['cliente/favoritos_cliente']) ?>
    <?php get_css_components() ?>
</head>
<body>

    <?php get_header() ?>

    <main class="main-container">
        <div class="sidebar-menu">
            <div class="roadmap">
                <ul class="breadcrumb-list">
                    <li class="breadcrumb-item">
                        <a href="#" class="breadcrumb-link">Home</a>
                    </li>
                    <li class="breadcrumb-item-separador">/</li>
                    <li class="breadcrumb-item">
                        <a href="#" class="breadcrumb-link" id="favorite">Favoritos</a>
                    </li>
                </ul>
            </div>
<<<<<<< HEAD
        </div>

        <section class="produtos-fav-tittle">
            <h2 class="title">Produtos Favoritos</h2>
            <button class="btn-move-all">Mover tudo para o carrinho</button>
        </section>

        <section class="card-produto-favorito">
            <div class="container-produto">
                <div class="produto-img-wrapper">
                    <img src="../../assets/img/computador.png" alt="ASUS Notebook Gamer" class="edit-favorito">
=======
    <div class="title-fav-produtos">Produtos Favoritos</div>
    <div href="#" class="btn mover-tudo-carrinho">Mover tudo para o carrinho</div>
    <div class="card-produto">
        <div class="card-body pb-1">
            <div class="row">
                <div class="col-sm-11">
                    <a href="${link}">
                        <img class="img-produto" src="../../assets/img/computador.png">
                    </a>
>>>>>>> 993b65b67d9c401ed030595126c729aa446073a4
                </div>
                <img src="../../assets/img/carrinho2.svg" alt="Carrinho" class="icone-carrinho">
                <a href="#" class="btn-add-carrinho">Adicionar ao carrinho</a>
                <div class="container-nome-produto">
                    <h3 class="nome-produto">ASUS Notebook Gamer</h3>
                </div>
                <div class="container-preco-produto">
                    <h3 class="preco-produto">R$960</h3>
                </div>
            </div>
<<<<<<< HEAD

            <div class="container-produto">
                <div class="produto-img-wrapper">
                    <img src="../../assets/img/computador.png" alt="ASUS Notebook Gamer" class="edit-favorito">
=======
        </div>
        <div class="card-footer">
            <div class="row">
                <div class="col-sm-12">
                    <a href="#" class="btn-add-carrinho">Adicione ao Carrinho</a>
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
    <div class="card-produto">
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
>>>>>>> 993b65b67d9c401ed030595126c729aa446073a4
                </div>
                <img src="../../assets/img/carrinho2.svg" alt="Carrinho" class="icone-carrinho">
                <a href="#" class="btn-add-carrinho">Adicionar ao carrinho</a>
                <div class="container-nome-produto">
                    <h3 class="nome-produto">ASUS Notebook Gamer</h3>
                </div>
                <div class="container-preco-produto">
                    <h3 class="preco-produto">R$960</h3>
                </div>
            </div>

               <div class="container-produto">
                <div class="produto-img-wrapper">
                    <img src="../../assets/img/computador.png" alt="ASUS Notebook Gamer" class="edit-favorito">
                </div>
                <img src="../../assets/img/carrinho2.svg" alt="Carrinho" class="icone-carrinho">
                <a href="#" class="btn-add-carrinho">Adicionar ao carrinho</a>
                <div class="container-nome-produto">
                    <h3 class="nome-produto">ASUS Notebook Gamer</h3>
                </div>
                <div class="container-preco-produto">
                    <h3 class="preco-produto">R$960</h3>
                </div>
            </div>
            
            <div class="container-produto">
                <div class="produto-img-wrapper">
                    <img src="../../assets/img/computador.png" alt="ASUS Notebook Gamer" class="edit-favorito">
                </div>
                <img src="../../assets/img/carrinho2.svg" alt="Carrinho" class="icone-carrinho">
                <a href="#" class="btn-add-carrinho">Adicionar ao carrinho</a>
                <div class="container-nome-produto">
                    <h3 class="nome-produto">ASUS Notebook Gamer</h3>
                </div>
                <div class="container-preco-produto">
                    <h3 class="preco-produto">R$960</h3>
                </div>
            </div>
        </section>

        <section class="produtos-fav-tittle">
            <h2 class="title">Vendedores Favoritos</h2>
        </section>

        <section class="lojas-favoritas">
            <div class="container-loja">
                <img src="" alt="Studio Center" class="loja-img">
                <h3 class="nome-loja">Studio Center</h3>
                <p class="loja-info">Avaliações: ★★★★★</p>
                <a href="#" class="btn-visitar-loja">Visitar Loja</a>
            </div>
            <div class="container-loja">
                <img src="../../assets/img/loja-favorita.png" alt="Studio Center" class="loja-img">
                <h3 class="nome-loja">Studio Center</h3>
                <p class="loja-info">Avaliações: ★★★★★</p>
                <a href="#" class="btn-visitar-loja">Visitar Loja</a>
            </div>
            <div class="container-loja">
                <img src="../../assets/img/loja-favorita.png" alt="Studio Center" class="loja-img">
                <h3 class="nome-loja">Studio Center</h3>
                <p class="loja-info">Avaliações: ★★★★★</p>
                <a href="#" class="btn-visitar-loja">Visitar Loja</a>
            </div>
            <div class="container-loja">
                <img src="../../assets/img/loja-favorita.png" alt="Studio Center" class="loja-img">
                <h3 class="nome-loja">Studio Center</h3>
                <p class="loja-info">Avaliações: ★★★★★</p>
                <a href="#" class="btn-visitar-loja">Visitar Loja</a>
            </div>
        </section>
    </main>


    <?php get_footer() ?>
</body>
<script src="../../assets/js/script.js"></script>
</html>