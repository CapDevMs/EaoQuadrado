<?php
    include('../config/funcoes.php');
    $appName = get_app_name();
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E ao Quadrado - O melhor E-commerce</title>
    <!-- <title><?= $appName . ' - ' . $titulo ?? '' ?></title> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />    <?php get_css(['cliente/categoria']) ?>
    <?php get_css(['base','style','cliente/categoria']) ?>
    <?php get_css_components() ?>
</head>


<body>
    <?php get_header() ?>
<main>
    <div class="container-video">
        <div class="video-celular">
            <video autoplay muted loop>
                <source src="../assets/videos/video-categoria_celular.mp4.mp4" type="video/mp4">        
            </video>
        </div>      
    </div> 
    <div class="container-title-categoria">
        <div class="conteiner-green"></div>
        <div class="marcador-titulo"> 
            <p class="titulo-categoria">Celular</p>
        </div>
    </div>
    
    <!-- Botões de categoria -->
    <!-- <div class="container categoria-layout"> -->
        <!-- <div class="categorias-button ">
            <div class="button-categoria"></div>
        </div>
        -->
    <div class="section-categoria-filtros">    
        <div class="container-buttons">
            <button-categoria class="button-categoria "></button-categoria>
        </div>
        
        <div class="content-container col-sm-1 ptb-1">
            <!-- Sidebar com filtros -->
            <div class="sidebar">
                <!-- Filtro de marcas -->
                <div class="marcas_preco">
                    <h1 class="marcas">Marcas</h1>
                    <div class="search-group">
                        <input class="search-bar-marcas" placeholder="Buscar Produtos">
                        <button class="search-marca" alt="Pesquisar_Marca"></button>
                    </div>
                    
                    <!-- Filtro de preço -->
                    <h1 class="preco">Preço</h1>
                    <div class="price-range-container">
                        <div class="price-input-group">
                            <label for="minimo" class="label-min_max">Mínimo</label>
                            <input type="text" id="minimo" class="min_max">
                        </div>
                        <div class="price-input-group">
                            <label for="maximo" class="label-min_max">Máximo</label>
                            <input type="text" id="maximo" class="min_max">
                        </div>
                    </div>
                </div>
                
                <!-- Categorias -->
                <div class="sidebar__categoria">
                    <nav class="sidebar__navigation">
                        <h3>Categorias</h3>
                        <a href="">Celulares</a>
                        <a href="">Computadores</a>
                        <a href="">Smartwatches</a>
                        <a href="">Câmera</a>
                        <a href="">Fones de Ouvido</a>
                        <a href="">Games</a>
                    </nav>
                </div>
                
                <!-- Avaliações -->
                <h1 class="titulo">Avaliação dos Vendedores</h1>
                <div class="checkbox-container"> 
                    <input type="checkbox" name="tudo" id="tudo">
                    <label for="tudo">Tudo</label>
                    
                    <input type="checkbox" name="5-star" id="star5">
                    <label for="star5">
                        <img src="../assets/img/categoria/Five_Star.png" alt="5 estrelas">
                    </label>
                    
                    <input type="checkbox" name="4-star" id="star4">
                    <label for="star4">
                        <img src="../assets/img/categoria/Four_Star.png" alt="4 estrelas">
                    </label>
                    
                    <input type="checkbox" name="3-star" id="star3">
                    <label for="star3">
                        <img src="../assets/img/categoria/Three_Star.png" alt="3 estrelas">
                    </label>
                
                    <input type="checkbox" name="2-star" id="star2">
                    <label for="star2">
                        <img src="../assets/img/categoria/Two_Star.png" alt="2 estrelas">
                    </label>
                    
                    <input type="checkbox" name="1-star" id="star1">
                    <label for="star1">
                        <img src="../assets/img/categoria/One_Star.png" alt="1 estrela">
                    </label>
                </div>
    </div>            
            </div>  
        <!-- </div> -->
        <!-- Produtos -->
            <!-- <div>
                <card-produto class="row"></card-produto>
            </div> -->
        </div>
    </main>     
    <script type="module" src="../assets/js/categoria.js?<?= time();?>" defer></script>
    <script type="module" src="../assets/js/pagina_do_vendedor.js?<?= time(); ?>" defer></script>
    <?php get_footer() ?>
    
</body>
</html>