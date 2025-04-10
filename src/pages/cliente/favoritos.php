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
    <?php get_header(); ?>

    <main class="main-container">
        <div class="sidebar-menu">
            <a href="meu-perfil-cliente.php">
                <p>Meu Perfil</p>
            </a>
            <span id="separator">/</span>
            <a href="#">Meus Favoritos</a>
            <span class="separator">/</span>
        </div>
      
    <div class="row">
        <div class="col-sm-12">
            <div class="container-header-section">
                <div class="block-green"></div>
                <p class="text-prmary">Produtos Favoritos</p>
            </div>
        </div>    
    </div>
    <a href="./carrinho.php">
        <div class="btn-mover-tudo-carrinho">
            <p class="p-text-move-carrinho">Mover tudo ao carrinho</p>
        </div>
    </a>
    <card-produto-fav class="row"></card-produto-fav>


    <div class="title-fav-vendedores">vendedores Favoritos</div>


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
    <script type="module" src="../../assets/js/favoritos.js?<?= time(); ?>"></script>
    <script type="module" src="../../assets/js/card-prod-favoritos.js?"></script>

    <?php get_footer() ?>
</body>

</html>