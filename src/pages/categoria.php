<?php
require_once('../config/funcoes.php');
require('../config/conexao.php');

?>
<?php get_base_head(); ?>

<body>
    <?php get_header() ?>
    <link rel = 'stylesheet' href="../../assets/css/categoria.css">

    <div class="container-video">
        <div class="video-celular">
        <video autoplay muted loop>
            <source src="../assets/videos/video-categoria_celular.mp4.mp4" type="video/mp4">        
        </video>
        <p>Computadores</p>
        </div>      
    </div> 

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
            <!-- <div class="checkbox-container"> 
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
            </div> -->
    <main>

        <section class="section-categoria">
            <div class="section-categoria__button">
                <buttonCategoria></buttonCategoria>
            </div>
        </section>

        <div class="grid-produtos-pagina-vendedor">
            <div class="grid-item-produtos-pagina-vendedor">
                <div class="container-foto">
                    <img class="img-produto" src="../../assets/img/imgs-produtos/racao.avif">
                </div>
                <div class="container-coracao-carrinho">
                    <img class="icones-coracao-carrinho" src="../../assets/img/icone-coracao.svg" alt="like" />
                    <img class="icones-coracao-carrinho" src="../../assets/img/icone-carrinho.svg" alt="cart" />
                </div>
                <div class="container-nome-produto">
                    <h3 class="nome-produto">Ração Cachorro Pedigree 20kg</h3>
                </div>
                <div class="container-preco-produto">
                    <h3 class="preco-produto">R$119,90</h3>
                </div>
            </div>
           
            <div class="grid-item-produtos-pagina-vendedor">
                <div class="container-foto">
                    <img class="img-produto" src="../../assets/img/imgs-produtos/foto-camera.png">
                </div>
                <div class="container-coracao-carrinho">
                    <img src="../../assets/img/icone-coracao.svg" alt="like" />
                    <img src="../../assets/img/icone-carrinho.svg" alt="cart" />
                </div>
                <div class="container-nome-produto">
                    <h3 class="nome-produto">CANON EOS DSLR Camera</h3>
                </div>
                <div class="container-preco-produto">
                    <h3 class="preco-produto">R$499,90</h3>
                </div>
            </div>
            
            <div class="grid-item-produtos-pagina-vendedor">
                <div class="container-foto">
                    <img class="img-produto" src="../../assets/img/imgs-produtos/foto-notebook.png">
                </div>
                <div class="container-coracao-carrinho">
                    <img src="../../assets/img/icone-coracao.svg" alt="like" />
                    <img src="../../assets/img/icone-carrinho.svg" alt="cart" />
                </div>
                <div class="container-nome-produto">
                    <h3 class="nome-produto">Notebook Gamer ASUS</h3>
                </div>
                <div class="container-preco-produto">
                    <h3 class="preco-produto">R$1.119,90</h3>
                </div>
            </div>

            <div class="grid-item-produtos-pagina-vendedor">
                <div class="container-foto">
                    <img class="img-produto" src="../../assets/img/imgs-produtos/foto-curology-kit.png">
                </div>
                <div class="container-coracao-carrinho">
                    <img src="../../assets/img/icone-coracao.svg" alt="like" />
                    <img src="../../assets/img/icone-carrinho.svg" alt="cart" />
                </div>
                <div class="container-nome-produto">
                    <h3 class="nome-produto">Curology Product Set</h3>
                </div>
                <div class="container-preco-produto">
                    <h3 class="preco-produto">R$259,90</h3>
                </div>
            </div>

            <div class="grid-item-produtos-pagina-vendedor">
                <div class="container-foto">
                    <div class="etiqueta-produto-novo">Novo</div>
                    <img class="img-produto" src="../../assets/img/imgs-produtos/foto-carrinho-infantil.png">
                </div>
                <div class="container-coracao-carrinho">
                    <img src="../../assets/img/icone-coracao.svg" alt="like" />
                    <img src="../../assets/img/icone-carrinho.svg" alt="cart" />
                </div>
                <div class="container-nome-produto">
                    <h3 class="nome-produto">Carrinho Infantil Turbo</h3>
                </div>
                <div class="container-preco-produto">
                    <h3 class="preco-produto">R$389,90</h3>
                </div>
            </div>

            <div class="grid-item-produtos-pagina-vendedor">
                <div class="container-foto">
                    <img class="img-produto" src="../../assets/img/imgs-produtos/foto-chuteira-adidas.png">
                </div>
                <div class="container-coracao-carrinho">
                    <img src="../../assets/img/icone-coracao.svg" alt="like" />
                    <img src="../../assets/img/icone-carrinho.svg" alt="cart" />
                </div>
                <div class="container-nome-produto">
                    <h3 class="nome-produto">Chuteira Adidas</h3>
                </div>
                <div class="container-preco-produto">
                    <h3 class="preco-produto">R$99,90</h3>
                </div>
            </div>

            
            <div class="grid-item-produtos-pagina-vendedor">
                <div class="container-foto">
                    <img class="img-produto" src="../../assets/img/imgs-produtos/foto-controle-ps5.png">
                </div>
                <div class="container-coracao-carrinho">
                    <img src="../../assets/img/icone-coracao.svg" alt="like" />
                    <img src="../../assets/img/icone-carrinho.svg" alt="cart" />
                </div>
                <div class="container-nome-produto">
                    <h3 class="nome-produto">Controle Dualsense PS5</h3>
                </div>
                <div class="container-preco-produto">
                    <h3 class="preco-produto">R$329,50</h3>
                </div>
            </div>
            <div class="grid-item-produtos-pagina-vendedor">
                <div class="container-foto">
                    <img class="img-produto" src="../../assets/img/imgs-produtos/foto-camiseta-tommy.png">
                </div>
                <div class="container-coracao-carrinho">
                    <img src="../../assets/img/icone-coracao.svg" alt="like" />
                    <img src="../../assets/img/icone-carrinho.svg" alt="cart" />
                </div>
                <div class="container-nome-produto">
                    <h3 class="nome-produto">Camiseta Tommy Hilfiger</h3>
                </div>
                <div class="container-preco-produto">
                    <h3 class="preco-produto">R$199,90</h3>
                </div>
            </div>
        </div>

                       
    </main>

    <?php get_footer() ?>
</body>

<script type ="module" src="../assets/js/categoria.js"></script>
</html>