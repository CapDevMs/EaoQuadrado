<?php
require_once('../config/funcoes.php');
require('../config/conexao.php');

?>
<?php get_base_head(); ?>

<body>
    <?php get_header() ?>
    <link rel = 'stylesheet' href="../../assets/css/categoria.css">

    <div class ="sidebar">
        <div class="sidebar__marcas-preco">
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
            
            <input type="checkbox" name="tudo"><label for="tudo">Tudo</label>
            <input type="checkbox" name="5-star"><label for="5-star" id="star5"><img src="../assets/img/CATEGORIA/Five_Star.png" id="5_star" alt=""></label>
            <input type="checkbox" name="4-star"><label for="4-star" id="star4"><img src="../assets/img/CATEGORIA/Four_Star.png" id="4_star" alt=""></label>
            <input type="checkbox" name="3-star"><label for="3-star" id="star3"><img src="../assets/img/CATEGORIA/Three_Star.png" id="3_star" alt=""></label>
            <input type="checkbox" name="2-star"><label for="2-star" id="star2"><img src="../assets/img/CATEGORIA/Two_Star.png" id="2_star" alt=""></label>
            <input type="checkbox" name="1-star"><label for="1-star" id="star1"><img src="../assets/img/CATEGORIA/One_Star.png" id="1_star" alt=""></label>
        </div>
    </div>
    <main>
        <div class="main-content">
            <div class="container-video">
                <div class="container-video__video-celular">
                <video autoplay muted loop>
                    <source src="../assets/videos/video-categoria_celular.mp4.mp4" type="video/mp4">        
                </video>
                </div>      
            </div> 
            <section class="section-categoria">
                <div class="section-categoria__button">
                    <button class="categoria-celular">
                        <img src="../assets/img/categoria/img-produtos/icones-categoria/Category-CellPhone.png"id="Categoria-celular" alt="categoria-celular">
                    </button> 
                    <button class="categoria-computador">
                        <img src="../assets/img/categoria/img-produtos/icones-categoria/Category-Computer.png" id="Categoria-computador" alt="Categoria-computador">
                    </button>
                    <button class="categoria-smartwatche">   
                        <img src="../assets/img/categoria/img-produtos/icones-categoria/Category-SmartWatch.png" id="Categoria-smartwatche" alt="Categoria-smartwache">
                    </button>
                    <button class="categoria-camera">
                        <img src="../assets/img/categoria/img-produtos/icones-categoria/Category-Camera.png"  id="Categoria-camera" alt="Categoria-camera">
                    </button>
                    <button class="categoria-fone-de-ouvido">    
                        <img src="../assets/img/categoria/img-produtos/icones-categoria/Category-Headphone.png" alt="categoria fone de ouvido" id="Categoria-fone_de_ouvido">
                    </button>
                    <button class="categoria-gamer">    
                        <img src="../assets/img/categoria/img-produtos/icones-categoria/Category-Gamepad.png"alt="categoria gamer" id="Categoria-gamer">
                    </button>    
                </div>
            </section>
        </div>               
        <div class="container-video">
            <div class="video-celular">
            <video autoplay muted loop>
                <source src="../assets/videos/video-categoria_celular.mp4.mp4" type="video/mp4">        
            </video>
            </div>      
        </div> 
        <section class="section-categoria">
            <div class="section-categoria__button">
                <button class="categoria-celular">
                    <img src="../assets/img/categoria/icone-categoria/Category-CellPhone.png"id="Categoria-celular" alt="categoria-celular">
                </button> 
                <button class="categoria-computador">
                    <img src="../assets/img/categoria/icone-categoria/Category-Computer.png" id="Categoria-computador" alt="Categoria-computador">
                </button>
                <button class="categoria-smartwatche">   
                    <img src="../assets/img/categoria/icone-categoria/Category-SmartWatch.png" id="Categoria-smartwatche" alt="Categoria-smartwache">
                </button>
                <button class="categoria-camera">
                    <img src="../assets/img/categoria/icone-categoria/Category-Camera.png" alt="Categoria-camera" id="Categoria-camera">
                </button>
                <button class="categoria-fone-de-ouvido">    
                    <img src="../assets/img/categoria/icone-categoria/Category-Headphone.png" alt="Categoria fone de ouvido" id="Categoria-fone_de_ouvido">
                </button>
                <button class="categoria-gamer">    
                    <img src="../assets/img/categoria/Category-Gamepad.png"alt="categoria gamer" id="Categoria-gamer">
                </button>    
            </div>
        </section>
                       
    </main>

    <?php get_footer() ?>
</body>
<script src="../assets/js/script.js"></script>
</html>