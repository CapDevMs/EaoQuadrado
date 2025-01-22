<?php
require_once('../config/funcoes.php');
require('../config/conexao.php');

?>
<?php get_base_head(); ?>

<body>
    <?php get_header(); ?>
    <link rel = 'stylesheet' href="../assets/css/carrinho_cliente/style.css">



    <main>
        <div class="container">

            <a href = '#' class = 'trail-1'>home / </a><span>carrinho</span>
            <h2 class="subtitle-1">Carrinho</h2>

            <div class = 'products'>
                <div></div>

                <div class = 'product'>

                    <div class = 'product-1'><img src = '../assets/img/acer_nitro.png' class = 'image '></div> 
                    <div class = 'product-2'><span class = 'product-1-1'>Nome do produto</span><br><span class = 'product-1-2'>Acer nitro V5</span></div>
                    <div class = 'product-3'><span class = 'product-1-1'>Preço</span><br><span class = 'product-1-2'>R$ 4690,00</span></div>
                    <div class = 'product-4'><span class = 'product-1-1'>Quantidade</span><br><input type="Number" class = 'product-1-2'></div>
                    <div class = 'product-5'><span class = 'product-1-1'>Subtotal</span><br><span class = 'product-1-2'>R$ 4690,00</span></div>
                    <div class = 'product-6'><a href = '#'><img src = '../assets/img/lixeira-icon.png' class = 'icon'></a></div> 

                </div>
                
                <div></div>
            </div>

        
        </div>
    </main>

    <?php get_footer()?>    
</body>
<script src="assets/js/script.js"></script>
</html>