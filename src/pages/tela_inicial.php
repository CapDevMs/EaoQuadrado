<?php
require_once('../config/funcoes.php');
require('../config/conexao.php');

?>
<?php get_base_head(); ?>
<body>
    <link rel="stylesheet" href="../assets/css/tela_inicial.css">
    <header class="header">
        <nav class="navbar">
            <div class="navbar-logo">
                <a href="#">
                    <img src="../assets/img/logo.png" class="logo" alt="Logo">
                </a>
            </div>
            <div class="search-bar">
                <input type="text" class="search-input" placeholder="O que você procura hoje?">
                <img src="../assets/img/pesquisar.svg" class="search-logo" alt="Pesquisar">
            </div>
            <ul class="menu-opcoes">
                <li class="menu-opcoes-icons">
                    <a href="#">
                        <img src="../assets/img/pessoa.svg" alt="Pessoa">
                    </a>
                </li>
                <li class="menu-opcoes-icons">
                    <a href="#">
                        <img src="../assets/img/carrinho.svg" alt="Carrinho">
                    </a>
                </li>
                <li class="menu-opcoes-icons">
                    <a href="#">
                        <img src="../assets/img/informacao.svg" alt="Informações">
                    </a>
                </li>
                <li class="menu-opcoes-icons">
                    <a href="#">
                        <img src="../assets/img/suporte.svg" alt="suporte">
                    </a>
                </li>
            </ul>
        </nav>
    </header>

    <main>
        <ul class="slider">
            <li>  
                <input type="radio" id="slide1" class="btn-slide" name="slide" checked>
                <label for="slide1"></label>
                <img src="../assets/img/slide1.png" />
            </li>
            <li>
                <input type="radio" id="slide2" class="btn-slide" name="slide">
                <label for="slide2"></label>
                <img src="../assets/img/slide2.png"/>
            </li>
            <li>
                <input type="radio" id="slide3" class="btn-slide" name="slide">
                <label for="slide3"></label>
                <img src="../assets/img/slide3.png" />
            </li>
            <li>
                <input type="radio" id="slide4" class="btn-slide" name="slide">
                <label for="slide4"></label>
                <img src="../assets/img/slide4.png" />
            </li>
        </ul>
        <script src="../../src/assets/js/tela_inicial.js"></script>

        <div class="frame_container_categoria">
            <hr class="frame_categoria">
            <h1>Lançamentos</h1>
        </div>

        
        <div class="mosaico">
            <div class="itens1" id="item1">
                <div class="texto">
                    <h1>PlayStation 5</h1>
                    <p>Versão em preto e branco do PS5 chegando à venda</p>
                    <h1>Compre Agora!<h1>
                </div>
            </div>
            <div class="itens2" id="item2">
                <div class="texto">
                    <h1>Roupas</h1>
                    <p>Coleções  em destaque que dão outra vibe<p>
                    <h1>Compre Agora!<h1>
                </div>
            </div>
            <div class="itens3" id="item3">
                <div class="texto">
                    <h1>Caixa de Som</h1>
                    <p>Alto-falantes sem fio</p>
                    <h1>Compre Agora!<h1>
                </div>
            </div>

            <div class="itens4" id="item4">
                <div class="texto">
                    <h1>Bolsa</h1>
                    <p>GUCCI INTENSE </p>
                    <h1>Compre Agora!<h1>
                </div>
            </div>
        </div>


        <div class="frame_container_categoria">
            <hr class="frame_categoria">
            <h1>Categorias</h1>
        </div>
        
        <div class="categorias_container">
            <div class="categoria" href="#"><img src="../assets/img/cellphone_icon.svg" alt="celulares"><p>Celulares</p></div>
            <div class="categoria" href="#"><img src="../assets/img/computer_icon.svg" alt="computer"><p>Computadores</p></div>
            <div class="categoria" href="#"><img src="../assets/img/smartwatches_icon.svg" alt="smartwatches"><p>Smartwatches</p></div>
            <div class="categoria" href="#"><img src="../assets/img/camera_icon.svg" alt="cameras"><p>Câmeras</p></div>
            <div class="categoria" href="#"><img src="../assets/img/headphone_icon.svg" alt="headphone"><p>Fone de Ouvido</p></div>
            <div class="categoria" href="https://teams.microsoft.com/v2/"><img src="../assets/img/games_icon.svg" alt="games"><p>Games</p></div>
        </div>

        <div class="frame_container_categoria">
            <hr class="frame_categoria">
            <h1>Vendedor Destaque</h1>
        </div>

        <div class="img_container">
            <img src="../assets/img/Banner_loja.png" class="img" alt="Banner da Loja">
        </div>

        <div class="frame_container_categoria">
            <hr class="frame_categoria">
            <h1>Nossos Produtos</h1>
        </div>

        <div class="produtos_container">
            <div class="produtos" id="produto_line1"><img src="../assets/img/racao_cesar_cachorro.svg" alt=""></div>
            <div class="produtos" id="produto_line1"><img src="../assets/img/camera_canon.svg" alt=""></div>
            <div class="produtos" id="produto_line1"><img src="../assets/img/asus_notebook.png" alt=""></div>
            <div class="produtos" id="produto_line1"><img src="../assets/img/curology_product.svg" alt=""></div>
            <div class="produtos" id="produto_line2"><img src="../assets/img/carro_eletrico.svg" alt=""></div>
            <div class="produtos" id="produto_line2"><img src="../assets/img/chuteira_adidas.svg" alt=""></div>
            <div class="produtos" id="produto_line2"><img src="../assets/img/controle_ps5.png" alt=""></div>
            <div class="produtos" id="produto_line2"><img src="../assets/img/jaqueta.svg" alt=""></div>
        </div>
        
    </main>
    


    
    <footer>
    <?php get_footer() ?>
    </footer>
</body>
<script src="assets/js/script.js"></script>
</html>