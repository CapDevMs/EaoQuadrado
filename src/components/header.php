<?php
$base_url = get_base_url();
?>

<header class="header">
    <nav class="navbar">
        <div class="navbar-logo">
            <a href="<?=$base_url;?>">
                <img src="<?=$base_url;?>assets/img/logo.png" class="logo" alt="Logo">
            </a>
        </div>
        <ul class="menu-opcoes">
            <?php if (!session()->has('user')): ?>
                <li class="menu-opcoes-icons">
                    <a href="<?=$base_url;?>login">
                        <img src="<?=$base_url;?>assets/img/pessoa.svg" alt="Pessoa">
                    </a>
                </li>
            <?php else: ?>
                <li class="menu-opcoes-icons">
                    <a href="<?=$base_url;?>cliente">
                        <img src="<?=$base_url;?>assets/img/pessoa.svg" alt="Pessoa">
                    </a>
                </li>
            <?php endif; ?>
            <li class="menu-opcoes-icons">
                <a href="<?=$base_url;?>carrinho">
                    <img src="<?=$base_url;?>assets/img/carrinho.svg" alt="Carrinho">
                </a>
            </li>
            <li class="menu-opcoes-icons">
                <a href="<?=$base_url;?>sobre">
                    <img src="<?=$base_url;?>assets/img/informacao.svg" alt="Informações">
                </a>
            </li>
            <?php if (session()->has('user')): ?>
                <li class="menu-opcoes-icons">
                    <a href="<?=$base_url;?>logout">
                        <img src="<?=$base_url;?>assets/img/logout.svg" alt="Sair">
                    </a>
                </li>
            <?php endif; ?>
        </ul>

        <div class="header-mobile">
                <img src="<?=$base_url;?>assets/img/menu-mobile.svg" alt="Menu" id="hamburguer">

        </div>
    </nav>
</header>
<!-- Menu Mobile -->
<div class="mobile-menu" id="mobileMenu">
    <ul>
        <?php if (session()->has('user')): ?>
            <li><a href="<?=$base_url;?>cliente">Meu Perfil</a></li>
            <li><a href="<?=$base_url;?>logout">Logout</a></li>
        <?php else: ?>
            <li><a href="<?=$base_url;?>login">Login</a></li>
            <li><a href="<?=$base_url;?>cadastroCliente">Cadastro</a></li>
        <?php endif; ?>

        <li><a href="<?=$base_url;?>carrinho">Carrinho</a></li>
        <li><a href="<?=$base_url;?>sobre">Sobre</a></li>
    </ul>
</div>

<?php

    if (session()->has('success')) {
        echo '<div class="toast success">' . session()->get('success') . '</div>';
    }

    if (session()->has('error')) {
        echo '<div class="toast error">' . session()->get('error') . '</div>';
    }

?>

<script src="<?=$base_url;?>assets/js/header.js"></script>