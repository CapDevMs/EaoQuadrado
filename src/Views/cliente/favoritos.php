<?php
    $appName = get_app_name();
    $baseUrl = get_base_url();
    $titulo = 'Favoritos';
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title><?= $appName . ' - ' . $titulo ?? '' ?></title> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>E ao Quadrado - Favoritos</title>
    <?php get_css(['cliente/favoritos_cliente']) ?>
    <?php get_css_components() ?>
</head>
<body>
    <?php get_header(); ?>

<main class="main-container">
    <!-- section roadmap -->
    <!-- <div class="sidebar-menu">
        <a href="meu-perfil-cliente.php">
            <p>Meu Perfil</p>
        </a>
        <span id="separator">/</span>
        <a href="#">Meus Favoritos</a>
        <span class="separator">/</span>
    </div> -->

    <div class="header-favoritos">
        <p class="title-section-produtos">Produtos Favoritos</p>
                <a href="<?= get_base_url(); ?>carrinho" class="btn-mover-tudo-carrinho">
                <div>
            <p class="p-text-move-carrinho">Mover tudo ao carrinho</p>
        </div>  
    </a>
</div>

<card-prod-favorito class="card-prod-favorito-container row"></card-prod-favorito>

<div class="title-section-lojas">Lojas Favoritas</div>

<card-vendedor-favorito class="card-vendedor-favorito row"></card-vendedor-favorito>

<pagina-seguinte class="pagina-seguinte"></pagina-seguinte>    

</main> 
<script type="module" src="<?= get_base_url(); ?>assets/js/favoritos.js?<?= time(); ?> " defer ></script>
<script type="module" src="<?= get_base_url(); ?>assets/js/pagina-seguinte.js?<?= time(); ?>" defer></script>

<?php get_footer() ?>
</body>

</html>