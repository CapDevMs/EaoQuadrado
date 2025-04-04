<!DOCTYPE html>
<?php 
    include('../config/funcoes.php');
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php get_css(['historico_pedidos', 'base', 'style']) ?>
    
    <title>Eao Quadrado - Histórico</title>
</head>
<body>
    <header class="header">
    <?php get_header() ?>
    </header>
    <main>
        <main>

            <div class="container">

                <div class="frame_principal">

                    <div class="container-historico">

                        <img src="../assets/img/quadro_branco.png" alt="imagem do produto" class="produto-img">

                        <div class="column_group">
                            <p class="nome-produto">Nome do Produto</p>
                            <p class="produto-titulo">Quadrado Branco</p>
                        </div>

                        <div class="column_group">
                            <p class="data-compra">Data da Compra</p>
                            <p class="data-titulo">22/09/2024</p>                            
                        </div>

                        <div class="column_group">
                            <p class="preco-compra">Preço</p>
                            <p class="preco-titulo">R$259,90</p>
                        </div>

                        <a class="trocar-devolver" href="#">Trocar/Devolver</a>

                    </div>

                </div>

            </div>

    </main>

<?php get_footer()?>    
</body>
<script src="assets/js/script.js"></script>
</html>