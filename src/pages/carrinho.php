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
    <!-- <link rel='stylesheet' href="../assets/css/carrinho_cliente/headerCarrinho.css">
    <link rel='stylesheet' href="../assets/css/carrinho_cliente/footerCarrinho.css"> -->



    <main class = 'main'>
        <div class="container">

            <a href='./index.php' class='trail-1'>home / </a><span>carrinho</span>
            <h2 class="subtitle-1">Carrinho</h2>

            <div class='cartProducts' id = 'container'>



            </div>
        </div>

    </main>
    
  
            <div class="totalizador">
                <div class="totalLine">
                    <span class = 'span'>Subtotal</span>
                    <span class="span total">...</span>
                </div><hr class = 'hr'>
                <div class="totalLine">
                    <span class = 'span'>Frete:</span>
                    <span class="span">A combinar</span>
                </div><hr class = 'hr'>
                <div class="totalLine">
                    <span class = 'span'>Total:</span>
                    <span class="span total2">...</span>
                </div>

                <div class="totalLine">
                    <button class = 'botao1' onclick="voltarPagina()">Retorne as compras</button>
                    <script>function voltarPagina(){
                        window.history.back();
                        
                    }</script>
                    <a href = 'https://web.whatsapp.com/' style="max-width: fit-content;" ><button id = 'ApagarCarrinho' class = 'botao2' onclick = 'LimparCarrinho()'>Ir ao Whatsapp</button></a>
                    <script> function LimparCarrinho () {
                        console.log('show')
                    localStorage.removeItem('listaProdutos')
                }</script>
                </div>
            </div> 
    <?php get_footer() ?>
    <script src="../assets/js/carrinho/script.js"></script>
    <!-- <script src="../assets/js/carrinho/apiCarrinho.js"></script> -->
</body>