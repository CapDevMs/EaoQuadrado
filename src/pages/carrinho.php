<?php
require_once('../config/funcoes.php');
require('../config/conexao.php');

?>
<?php get_base_head(); ?>

<body>
    <?php get_header() ?>
    <link rel='stylesheet' href="../assets/css/carrinho_cliente/style.css">



    <main>
        <div class="container">

            <a href='#' class='trail-1'>home / </a><span>carrinho</span>
            <h2 class="subtitle-1">Carrinho</h2>

            <div class='cartProducts'>

                <div class='cart'>

                    <div class='cartProduct-1 cartProduct'>
                        <img src='../assets/img/acer_nitro.png' class='image '>
                    </div>

                    <div class='cartProduct-2 cartProduct'>

                        <span class='cartProduct-1-1'>Nome do produto</span><br>
                        <span class='product-1-2'>Acer nitro V5</span>
                    </div>

                    <div class='cartProductPrice cartProduct'>
                        <span class='product-1-1 cartProduct'>Preço</span><br>
                        <span class='product-1-2-price product-1-2'>R$ 4690,00</span>
                    </div>

                    <div class='cartProduct-4 cartProduct'>
                        <span class='product-1-1'>Quantidade</span><br><input type="Number" class='product-1-2 counter' min='0' value = 1>
                    </div>

                    <div class='cartProduct-5 cartProduct'>
                        <span class='product-1-1'>Subtotal</span><br><span class='product-1-2 subTotal'>...</span>
                    </div>

                    <div class='cartProduct-6 cartProduct'>
                        <a href='#' class = 'a'><img src='../assets/img/lixeira-icon.png' class='icon removeProductButton'></a>
                    </div>

                </div>

            </div>
        </div>
    </main>

    <?php get_footer() ?>
    <script src="../../src/assets/js/script.js"></script>
    <script src="../../src/assets/js/carrinho/script.js"></script>
</body>
</h tml>