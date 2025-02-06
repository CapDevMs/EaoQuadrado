<?php
<<<<<<< HEAD
require_once('./config/funcoes.php');
require('./config/conexao.php');

?>
<?php get_base_head(); ?>
<body>
    <header class="header">
        <nav class="navbar">
            <div class="navbar-logo">
                <a href="#">
                    <img src="./assets/img/logo.png" class="logo" alt="Logo">
                </a>
            </div>
            <div class="search-bar">
                <input type="text" class="search-input" placeholder="O que você procura hoje?">
                <img src="./assets/img/pesquisar.svg" class="search-logo" alt="Pesquisar">
            </div>
            <ul class="menu-opcoes">
                <li class="menu-opcoes-icons">
                    <a href="#">
                        <img src="./assets/img/pessoa.svg" alt="Pessoa">
                    </a>
                </li>
                <li class="menu-opcoes-icons">
                    <a href="#">
                        <img src="./assets/img/carrinho.svg" alt="Carrinho">
                    </a>
                </li>
                <li class="menu-opcoes-icons">
                    <a href="#">
                        <img src="./assets/img/informacao.svg" alt="Informações">
                    </a>
                </li>
                <li class="menu-opcoes-icons">
                    <a href="#">
                        <img src="./assets/img/suporte.svg" alt="suporte">
                    </a>
                </li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="container">
            <h1>Conteúdo da página</h1>
        </div>
    </main>

    <footer>
        <div class="footer-links">
            <div class="lista">
                <div class="footer-links-title">
                    <p>Suporte</p>
                </div>
                <div>
                    <ul class="footer-links-list">
                        <li class="footer-links-item">
                            <a href="#" class="footer-links-link">Senac Hub Academy</a>
                        </li>
                        <li class="footer-links-item">
                            <a href="#" class="footer-links-link">eaoquadado@gmail.com</a>
                        </li>
                        <li class="footer-links-item">
                            <a href="#" class="footer-links-link">+55 67 99999-9999</a>
                        </li>
                        <li class="footer-links-item">
                            <a href="#" class="footer-links-link">
                                R. do Parque, 75 - Centro Campo Grande - MS
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="lista">
                <div class="footer-links-title">
                    <p>Conta</p>
                </div>
                <div>
                    <ul class="footer-links-list">
                        <li class="footer-links-item">
                            <a href="#" class="footer-links-link">Minha Conta</a>
                        </li>
                        <li class="footer-links-item">
                            <a href="#" class="footer-links-link">Entre/Cadastre</a>
                        </li>
                        <li class="footer-links-item">
                            <a href="#" class="footer-links-link">Carrinho</a>
                        </li>
                        <li class="footer-links-item">
                            <a href="#" class="footer-links-link">Lista de Desejos</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="lista">
                <div class="footer-links-title">
                    <p>Acesso</p>
                </div>
                <div>
                    <ul class="footer-links-list">
                        <li class="footer-links-item">
                            <a href="#" class="footer-links-link">Nossa Política</a>
                        </li>
                        <li class="footer-links-item">
                            <a href="#" class="footer-links-link">Termos de Uso</a>
                        </li>
                        <li class="footer-links-item">
                            <a href="#" class="footer-links-link">FAQ</a>
                        </li>
                        <li class="footer-links-item">
                            <a href="#" class="footer-links-link">Contato</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>
<script src="assets/js/script.js"></script>
=======
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
            
            <input type="checkbox" name="tudo"><label for="tudo">Tudo</label>
            <input type="checkbox" name="5-star"><label for="5-star" id="star5"><img src="../assets/img/CATEGORIA/Five_Star.png" id="5_star" alt=""></label>
            <input type="checkbox" name="5-star"><label for="5-star" id="star4"><img src="../assets/img/CATEGORIA/Four_Star.png" id="5_star" alt=""></label>
            <input type="checkbox" name="5-star"><label for="5-star" id="star3"><img src="../assets/img/CATEGORIA/Three_Star.png" id="5_star" alt=""></label>
            <input type="checkbox" name="5-star"><label for="5-star" id="star2"><img src="../assets/img/CATEGORIA/Two_Star.png" id="5_star" alt=""></label>
            <input type="checkbox" name="5-star"><label for="5-star" id="star1"><img src="../assets/img/CATEGORIA/One_Star.png" id="5_star" alt=""></label>
        </div>
    </div>
    <main>

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
                    <img src="src\assets\img\CATEGORIA\ICONE_CATEGORIA\Category-CellPhone.png"id="Categoria-celular" alt="categoria-celular">
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
        </section>
                       
    </main>

    <?php get_footer() ?>
</body>
<script src="../assets/js/script.js"></script>
>>>>>>> c034c0e48908badefc9cb30ae34bacbcc36f2b1f
</html>