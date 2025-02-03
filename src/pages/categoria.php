<?php
    include('../config/funcoes.php');
    $appName = get_app_name();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $appName . ' - ' . $titulo ?? '' ?></title>
    <?php get_css(['categoria']) ?>
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
        <div class="categoria">
            <button class="categoria-celular">
                <img src="../assets/img/CATEGORIA/Categoria-celular.png"id="Categoria-celular" alt="categoria-celular">
            </button> 
            <button class="categoria-computador">
                <img src="../assets/img/CATEGORIA/Categoria-computador.png" id="Categoria-computador" alt="Categoria-computador">
            </button>
            <button class="categoria-smartwatche">   
                <img src="../assets/img/CATEGORIA/Categoria-smartwatche.png" id="Categoria-smartwatche" alt="Categoria-smartwache">
            </button>
            <button class="categoria-camera">
                <img src="../assets/img/CATEGORIA/Categoria-camera.png" alt="Categoria-camera" id="Categoria-camera">
            </button>
            <button class="categoria-fone-de-ouvido">    
                <img src="../assets/img/CATEGORIA/Categoria-fone_de_ouvido.png" alt="Categoria fone de ouvido" id="Categoria-fone_de_ouvido">
            </button>
            <button class="categoria-gamer">    
                <img src="../assets/img/CATEGORIA/Categoria-gamer.png"alt="categoria gamer" id="Categoria-gamer">
            </button>    
        </div>

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
        
        <div class="categorias">
            <h3>Categorias</h3>
            <a href="">Celulares</a>
            <a href="">Computadores</a>
            <a href="">Smartwatches</a>
            <a href="">Câmera</a>
            <a href="">Fones de Ouvido</a>
            <a href="">Games</a>
        </div>
        <h1 class="titulo">Avaliação dos Vendedores</h1>
        <div class="checkbox-container"> 
            
            <input type="checkbox" name="tudo"><label for="tudo">Tudo</label>
            <input type="checkbox" name="5-star"><label for="5-star" id="star5"><img src="../assets/img/CATEGORIA/Five_Star.png" id="5_star" alt=""></label>
            <input type="checkbox" name="5-star"><label for="5-star" id="star4"><img src="../assets/img/CATEGORIA/Four_Star.png" id="5_star" alt=""></label>
            <input type="checkbox" name="5-star"><label for="5-star" id="star3"><img src="../assets/img/CATEGORIA/Three_Star.png" id="5_star" alt=""></label>
            <input type="checkbox" name="5-star"><label for="5-star" id="star2"><img src="../assets/img/CATEGORIA/Two_Star.png" id="5_star" alt=""></label>
            <input type="checkbox" name="5-star"><label for="5-star" id="star1"><img src="../assets/img/CATEGORIA/One_Star.png" id="5_star" alt=""></label>
        </div>
        
       
    </main>

    <?php get_footer() ?>
</body>
<script src="../assets/js/script.js"></script>
</html>