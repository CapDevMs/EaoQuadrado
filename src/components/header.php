<?php
$base_url = get_base_url();
?>

<header class="header">
    <nav class="navbar">
        <div class="navbar-logo">
            <a href="<?=$base_url;?>/index.php">
                <img src="<?=$base_url;?>/assets/img/logo.png" class="logo" alt="Logo">
            </a>
        </div>
        <div class="search-bar">
            <input type="text" class="search-input" placeholder="O que você procura hoje?">
            <img src="<?=$base_url;?>/assets/img/pesquisar.svg" class="search-logo" alt="Pesquisar">
        </div>
        <ul class="menu-opcoes">
            <li class="menu-opcoes-icons">
                <a href="<?=$base_url;?>/pages/login.php">
                    <img src="<?=$base_url;?>/assets/img/pessoa.svg" alt="Pessoa">
                </a>
            </li>
            <li class="menu-opcoes-icons">
                <a href="<?=$base_url;?>/pages/carrinho.php">
                    <img src="<?=$base_url;?>/assets/img/carrinho.svg" alt="Carrinho">
                </a>
            </li>
            <li class="menu-opcoes-icons">
                <a href="<?=$base_url;?>/pages/cadastros/sobre.php">
                    <img src="<?=$base_url;?>/assets/img/informacao.svg" alt="Informações">
                </a>
            </li>
            <li class="menu-opcoes-icons">
                <a href="<?=$base_url;?>/pages/cadastros/contato.php">
                    <img src="<?=$base_url;?>/assets/img/suporte.svg" alt="suporte">
                </a>
            </li>
        </ul>
        <div class="header-mobile">
            <a href="">
                <img src="<?=$base_url;?>/assets/img/menu-mobile.svg" alt="Menu">
            </a>

        </div>
    </nav>
</header>