<?php
require_once('../config/funcoes.php');
require('../config/conexao.php');

?>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

<?php get_base_head(); ?>

<body>
    <?php get_header() ?>
    <link rel='stylesheet' href="../assets/css/carrinho_cliente/style.css">
    <link rel='stylesheet' href="../assets/css/base.css ">



    <main>
        <div class="container">

            <a href='#' class='trail-1'>home / </a><span>carrinho</span>
            <h2 class="subtitle-1">Carrinho</h2>

            <div class='cartProducts' id = 'container'>

                <!-- <div class='product'>
                    <div class='productDiv'>
                        <img src='../assets/img/carrinhoImagens/${image}' class='image '>
                    </div>  
                    <div class='productDiv'>
                        <span class=''>Nome do produto</span>
                        <span class='nomeProduto'>${name}</span>         
                    </div>
                    <div class='productDiv'>
                        <span class=''>Preço</span>
                        <span class='price'>R$ ${value}</span>
                    </div>
                    <div class='productDiv counterDiv'>
                        <div>
                        <span class='product-1-1'>Quantidade</span>
                        </div>
                        <div>
                        <input type="Number" class='counter' min='0' value = 1>
                        </div>           
                    </div>
                    <div class='productDiv'>  
                        <span class=''>Subtotal</span>
                        <span class='subTotal'>...</span> 
                    </div>
                    <div class='productDiv cartProduct-6'>
                        <a href='#' class = 'a'><img src='../assets/img/lixeira-icon.png' class='icon removeProductButton'></a>
                    </div>
                </div>  -->

            </div>
        </div>

    </main>
    
    
            <div class="totalizador">
                <div class="totalLine">
                    <span class = 'span'>Subtotal</span>
                    <span class="span">...</span>
                </div><hr>
                <div class="totalLine">
                    <span class = 'span'>Frete:</span>
                    <span class="span">A combinar</span>
                </div><hr>
                <div class="totalLine">
                    <span class = 'span'>Total:</span>
                    <span class="span">...</span>
                </div>
            </div>
    <?php get_footer() ?>
    <script src="../../src/assets/js/script.js"></script>
    <script src="../../src/assets/js/carrinho/script.js"></script>
</body>
</h tml>