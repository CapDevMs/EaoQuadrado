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


                <div class='product'>

                    <div class='productDiv'>

                        <img src='../assets/img/acer_nitro.png' class='image '>
                    
                    </div>  

                    <div class='productDiv'>

                        <span class=''>Nome do produto</span>
                        <span class=''>Acer nitro V5</span>
                    
                    </div>

                    <div class='productDiv'>
                    
                        <span class=''>Preço</span>
                        <span class='price'>R$ 4690,00</span>
                    
                    </div>

                    <div class='productDiv'>
                    
                        <span class='product-1-1'>Quantidade</span>
                        <input type="Number" class='counter' min='0' value = 1>
                    
                    </div>

                    <div class='productDiv'>
                    
                        <span class=''>Subtotal</span>
                        <span class='subTotal'>...</span>
                    
                    </div>

                    <div class='cartProduct-6'>
                    
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