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
    <title>E ao Quadrado - O melhor E-commerce</title>
    <?php get_css(['cliente/favoritos_cliente']) ?>
    <?php get_css_components() ?>
</head>
<body>
    <?php get_header() ?>

    <main>
        <div class="menu-lateral">
            <div class="menuzin">
                <div>
                    <ul class="mi-cont">
                        <li class="mi-cont">
                            <a href="#" class="mi-cont">Home</a>
                        </li>
                        <li class="mi-cont">
                            <p class="mi-cont">/</p>
                        </li>
                        <li class="mi-cont">
                            <a href="#" class="mi-cont" id="favorito">Favoritos</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="container-principal">
                <div class="fav-tittle">
                    <h4 class="title">Produtos Favoritos</h4>
                    <a href="#"><button class="but1">Mover tudo para o carrinho</button></a>
                </div>
                <div class="produto-favorito">
                    <div class="container">
                        <img class="edit-favorito" src="../../assets/img/computador.png">
                        <a href="#">
                            <img class="but-car" src="../../assets/img/carrinho2.svg">
                        </a>
                        <a href="#">
                            <button class="but2">Adicione ao carrinho</button>
                        </a>
                            <h4 class="name-prod">ASUS Notebook Gamer</h4>
                            <h5 class="preco-prod">R$960</h5>
                    </div>
                    <div class="container">
                        <img class="edit-favorito" src="../../assets/img/computador.png">
                        <a href="#">
                            <img class="but-car" src="../../assets/img/carrinho2.svg">
                        </a>
                        <a href="#">
                            <button class="but2">Adicione ao carrinho</button>
                        </a>
                        <h4 class="name-prod">ASUS Notebook Gamer</h4>
                        <h5 class="preco-prod">R$960</h5>
                    </div>
                    <div class="container">
                        <img class="edit-favorito" src="../../assets/img/computador.png">
                        <a href="#">
                            <img class="but-car" src="../../assets/img/carrinho2.svg">
                        </a>
                        <a href="#">
                            <button class="but2">Adicione ao carrinho</button>
                        </a>
                        <h4 class="name-prod">ASUS Notebook Gamer</h4>
                        <h5 class="preco-prod">R$960</h5>
                    </div>
                    <div class="container">
                        <img class="edit-favorito" src="../../assets/img/computador.png">
                        <a href="#">
                            <img class="but-car" src="../../assets/img/carrinho2.svg">
                        </a>
                        <a href="#">
                            <button class="but2">Adicione ao carrinho</button>
                        </a>
                        <h4 class="name-prod">ASUS Notebook Gamer</h4>
                        <h5 class="preco-prod">R$960</h5>
                    </div>
                    
                </div>
                <div class="fav-tittle">
                    <h4 class="title" id="loja-fav">Lojas Favoritas</h4>
                </div>
                <div class="lojas-favoritas">
                    <div class="container">
                        <img class="edit-loja-favorito" src="../../assets/img/loja-favorita.png">
                        <a href="#">
                            <button class="but2">Visitar loja</button>
                        </a>
                        <h4 class="name-prod">Studio Center</h4>
                    </div>
                    <div class="container">
                        <img class="edit-loja-favorito" src="../../assets/img/loja-favorita.png">
                        <a href="#">
                            <button class="but2">Visitar loja</button>
                        </a>
                        <h4 class="name-prod">Studio Center</h4>
                    </div>
                    <div class="container">
                        <img class="edit-loja-favorito" src="../../assets/img/loja-favorita.png">
                        <a href="#">
                            <button class="but2">Visitar loja</button>
                        </a>
                        <h4 class="name-prod">Studio Center</h4>
                    </div>
                    <div class="container">
                        <img class="edit-loja-favorito" src="../../assets/img/loja-favorita.png">
                        <a href="#">
                            <button class="but2">Visitar loja</button>
                        </a>
                        <h4 class="name-prod">Studio Center</h4>
                    </div>
                    
                </div>
            </div>
    </main>

    <?php get_footer() ?>
</body>
<script src="../../assets/js/script.js"></script>
</html>