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
</html>