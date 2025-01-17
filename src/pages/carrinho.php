<?php
require_once('../config/funcoes.php');
require('../config/conexao.php');

?>
<?php get_base_head(); ?>

<body>
    <link rel = 'stylesheet' href="../assets/css/carrinho_cliente/style.css">
    <?php get_header(); ?>


    <main>
        <div class="container">
            <a href = '#' class = 'trail-1'>home / </a><span>carrinho</span>
            <h2 class="subtitle-1">Carrinho</h2>
            <div class = 'products'>
                <div class = 'product'>
                    <div class = 'image'></div>
                    <div class = 'title'>Nome do produto</div>
                    <div class = 'title'></div>
                    <div class = 'quantia'></div>
                    <div class = 'subtotal'></div>
                </div>
            </div>
        </div>
    </main>

    <?php get_footer()?>    
</body>
<script src="assets/js/script.js"></script>
</html>