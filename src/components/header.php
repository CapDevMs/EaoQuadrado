<?php
$base_url = get_base_url();
?>

<header class="header">
    <nav class="navbar">
        <div class="navbar-logo">
            <a href="<?=$base_url;?>">
                <img src="<?=$base_url;?>/assets/img/logo.png" class="logo" alt="Logo">
            </a>
        </div>
        <div class="search-bar">
            <input type="text" class="search-input" placeholder="O que você procura hoje?">
            <img src="<?=$base_url;?>/assets/img/pesquisar.svg" class="search-logo" alt="Pesquisar">
        </div>
        <ul class="menu-opcoes">
            <li class="menu-opcoes-icons">
                <a href="<?=$base_url;?>/login">
                    <img src="<?=$base_url;?>/assets/img/pessoa.svg" alt="Pessoa">
                </a>
            </li>
            <li class="menu-opcoes-icons">
                <a href="<?=$base_url;?>/carrinho">
                    <img src="<?=$base_url;?>/assets/img/carrinho.svg" alt="Carrinho">
                </a>
            </li>
            <li class="menu-opcoes-icons">
                <a href="<?=$base_url;?>/cadastros/sobre">
                    <img src="<?=$base_url;?>/assets/img/informacao.svg" alt="Informações">
                </a>
            </li>
            <li class="menu-opcoes-icons">
                <a href="<?=$base_url;?>/contato">
                    <img src="<?=$base_url;?>/assets/img/suporte.svg" alt="suporte">
                </a>
            </li>
        </ul>
        <div class="header-mobile">
                <img src="<?=$base_url;?>/assets/img/menu-mobile.svg" alt="Menu" id="hamburguer">

        </div>
    </nav>
</header>
<!-- Menu Mobile -->
<div class="mobile-menu" id="mobileMenu">
    <ul>
        <li><a href="<?=$base_url;?>/login">Login</a></li>
        <li><a href="<?=$base_url;?>/carrinho">Carrinho</a></li>
        <li><a href="<?=$base_url;?>/cadastros/sobre">Sobre</a></li>
        <li><a href="<?=$base_url;?>/cadastros/contato">Contato</a></li>
    </ul>
</div>

<script src="<?=$base_url;?>/assets/js/header.js"></script>