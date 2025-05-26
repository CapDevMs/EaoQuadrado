<?php
$appName = get_app_name();
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E ao Quadrado - O melhor E-commerce</title>
    <!-- <title><?= $appName . ' - ' . $titulo ?? '' ?></title> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
    <?php get_css(['filtro_categoria', 'cliente/categoria']) ?>
    <?php get_css(['style', 'base','cliente/categoria']) ?>
    <?php get_css_components() ?>
</head>

<body>
    <?php get_header() ?>
    <div class="container-video">
                <video autoplay muted loop>
                    <source src="assets/videos/video-categoria_celular.mp4.mp4" type="video/mp4">
                </video>
    </div>
    <div class="container-main col-sm-12">
        <div class="containerLeft col-sm-2 md-1">

            <div class="filtroCategoria col-sm-12 ml-3">
                <h2 class="col-sm-12 mb-1">Marcas</h2>
                <input class="searchCategoria col-sm-12 mb-1" type="search" name="" id="" placeholder="Buscar Produto">
                <h2 class="price mb-1">Preço</h2>
                <div class="priceCategoria col-sm-12 row">
                    <div class="mediaCategoria col-sm-12 col-lg-6 mb-1">
                        <label for="min">Minimo</label>
                        <input class="numberInput" type="number" id=min">
                    </div>
                    <div class="mediaCategoria col-sm-12 col-lg-6 mb-1">
                        <label for="max">Maximo</label>
                        <input class="numberInput" type="number" id="max">
                    </div> 
                </div>

                <div class="row">
                    <h3 class="categoriasFiltro mb-1">Categorias</h3>
                    <a class="categoriasFiltro" href="#">Celulares</a>
                    <a class="categoriasFiltro" href="#">Computadores</a>
                    <a class="categoriasFiltro" href="#">Smartwatches</a>
                    <a class="categoriasFiltro" href="#">Câmera</a>
                    <a class="categoriasFiltro" href="#">Fones De Ouvido</a>
                    <a class="categoriasFiltro" href="#">Games</a>
                </div>

                <div class="vendedoresAvaliation">
                    <h2>Avaliação Dos Vendedores</h2>
                    <div class="inputTodos row">
                        <label class="checkbox-radio col-sm-2">
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <p class="col-sm-10">Todos</p>
                    </div>
                    <div class="inputAvaliation row">
                        <label class="checkbox-radio col-sm-2">
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <div class="starsFiltro col-sm-9">
                            <i class="fa fa-star icone-star"></i>
                            <i class="fa fa-star icone-star"></i>
                            <i class="fa fa-star icone-star"></i>
                            <i class="fa fa-star icone-star"></i>
                            <i class="fa fa-star icone-star"></i>
                        </div>

                    </div>
                    <div class="inputAvaliation row">
                        <label class="checkbox-radio col-sm-2">
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <div class="starsFiltro col-sm-10">
                            <i class="fa fa-star icone-star"></i>
                            <i class="fa fa-star icone-star"></i>
                            <i class="fa fa-star icone-star"></i>
                            <i class="fa fa-star icone-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>

                    </div>
                    <div class="inputAvaliation row">
                        <label class="checkbox-radio col-sm-2">
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <div class="starsFiltro col-sm-10">
                            <i class="fa fa-star icone-star"></i>
                            <i class="fa fa-star icone-star"></i>
                            <i class="fa fa-star icone-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                    </div>
                    <div class="inputAvaliation row">
                        <label class="checkbox-radio col-sm-2">
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <div class="starsFiltro col-sm-10">
                            <i class="fa fa-star icone-star"></i>
                            <i class="fa fa-star icone-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                    </div>
                    <div class="inputAvaliation row">
                        <label class="checkbox-radio col-sm-2">
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <div class="starsFiltro col-sm-10">
                            <i class="fa fa-star icone-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>                            
                        </div>

                    </div>
                </div>
                
                
            </div>
        </div>
        <div class="containerRight col-sm-10">
            <buttonCategoria class="buttonCategoria col-sm-9"></buttonCategoria>
            <div class="containerprodutofav col-sm-10">
                <cardProduto class="cardProduto row "></cardProduto>
            </div>
        </div>
        

    </div>

    <script type="module" src="assets/js/categoria.js?<?= time(); ?>" defer></script>
    <?php get_footer() ?>
</body>

</html>