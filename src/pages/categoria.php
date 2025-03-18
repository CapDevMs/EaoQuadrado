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
    <?php get_css(['cliente/categoria']) ?>
    <?php get_css_components() ?>
</head>


<body>
    <?php get_header() ?>
    <link rel = 'stylesheet' href="../assets/css/categoria.css">

    <div class="container-video">
        <div class="video-celular">
        <video autoplay muted loop>
            <source src="../assets/videos/video-categoria_celular.mp4.mp4" type="video/mp4">        
        </video>
        <p>Computadores</p>
        </div>      
    </div> 

    <section class="section-categoria">
            <div class="section-categoria__button">
                <buttonCategoria></buttonCategoria>
            </div>
    </section>

    <div class ="sidebar">
        <div class="marcas_preco">
                <h1 class="marcas">Marcas</h1>
                <input class="search-bar-marcas" placeholder="Buscar Produtos">
                <button class="search-marca" alt="Pesquisar_Marca"></button>
                <h1 class="preco">Preço</h1>
                <label for="minimo" class="label-min_max" id="min">Mínimo</label>
                <label for="maximo" class="label-min_max" id="max">Máximo</label>
                <input type="text" id="minimo" class="min_max">
                <input type="text" id="maximo" class="min_max">
            </div>
            
            <div class="sidebar__categoria">
                <nav class ="sidebar__navigation">
                    <h3>Categorias</h3>
                    <a href="">Celulares</a>
                    <a href="">Computadores</a>
                    <a href="">Smartwatches</a>
                    <a href="">Câmera</a>
                    <a href="">Fones de Ouvido</a>
                    <a href="">Games</a>
                </nav>
            </div>
            <h1 class="titulo">Avaliação dos Vendedores</h1>
            <div class="checkbox-container"> 
                <input type="checkbox" name="tudo" id="tudo">
                <label for="tudo">Tudo</label>
            
                <input type="checkbox" name="5-star" id="star5">
                <label for="star5">
                    <img src="../assets/img/CATEGORIA/Five_Star.png" alt="5 estrelas">
                </label>
            
                <input type="checkbox" name="4-star" id="star4">
                <label for="star4">
                    <img src="../assets/img/CATEGORIA/Four_Star.png" alt="4 estrelas">
                </label>
            
                <input type="checkbox" name="3-star" id="star3">
                <label for="star3">
                    <img src="../assets/img/CATEGORIA/Three_Star.png" alt="3 estrelas">
                </label>
            
                <input type="checkbox" name="2-star" id="star2">
                <label for="star2">
                    <img src="../assets/img/CATEGORIA/Two_Star.png" alt="2 estrelas">
                </label>
            
                <input type="checkbox" name="1-star" id="star1">
                <label for="star1">
                    <img src="../assets/img/CATEGORIA/One_Star.png" alt="1 estrela">
                </label>
            </div>
    <main>
        <card-produto class="row"></card-produto>
                       
    </main>

    <script type ="module" src="../assets/js/categoria.js?<?= time();?>"></script>
    <script type="module" src="../assets/js/pagina_do_vendedor.js"></script>
    <?php get_footer() ?>
    
</body>

</html>