<?php

$appName = get_app_name();
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EaoQuadrado</title>
    <?php get_css(['produto']) ?>
    <?php get_css_components() ?>
    <?php get_breadcrumbs() ?>
</head>

<body>
    <?php get_header(); ?>
    <main>
        <div class="container">
            <?php
            breadcrumb(array('http://localhost/EaoQuadrado/src/' => 'Home', 'http://localhost/EaoQuadrado/src/produto.php' => 'Produto'));
            ?>
                <div class="container-produto col-10">
                    <div class="galeria-container col-8"></div>
                    <div class="desc-produto col-5">
                        <h2 class="nome-produto">Bolsa Gucci</h2>
                        <h1 class="preco">R$ 989,00</h1>
                        <div class="contador-container"></div>
                        <div class="comprar col-sm-8">
                            <div id="btn-comprar"><a>Comprar</a></div>
                            <div id="icons-comprar">
                                
                                <img class = 'cursor' onclick = "window.location.href='<?=get_base_url();?>admin/carrinho'" id="MandarCarrinho icon" src="<?= get_base_url(); ?>assets/img/carrinho-tela-produto.svg" value="gucci_bolsa_intense.png|Gucci intense|400,00">
                                
                                <img class = 'cursor' onclick = "window.location.href='<?=get_base_url();?>favoritos'" src="<?= get_base_url(); ?>assets/img/coracao-tela-produto.svg">
                            </div>

                        </div>
                        
                        <div>
                            <fieldset class="loja col-sm-9 col-lg-10">
                                <img class='imagem-loja col-sm-3' src="<?= get_base_url(); ?>assets/img/tela-produtos/loja.png">
                                <p class="col-xl-6 col-lg-5"><span style="color: #16A18E;">Loja</span> Studio Center</p>
                                <div class="icons-loja col-sm-2">
                                    <img src="<?= get_base_url(); ?>assets/img/coracao-tela-produto.svg" id="loja-coracao">
                                    <img src="<?= get_base_url(); ?>assets/img/tela-produtos/Whatsapp.png" id="loja-whats">
                                </div>
                            </fieldset>
                        </div>

                    </div>
                </div>
                <div class="line col-10"></div>
                <div class="descricao col-10">
                    <p class="titulo-descricao">descrição do produto </p>
                    <p class="conteudo-descricao"">Eleve o seu estilo com a
                        deslumbrante Bolsa Feminina Gucci, uma verdadeira expressão de elegância e sofisticação.
                        Fabricada com couro sintético 100% PU de alta qualidade, esta bolsa é sinônimo de resistência
                        e durabilidade, garantindo sua beleza por muitas estações. Seu design apresenta uma textura lisa
                        adornada com o distintivo desenho geométrico da marca Gucci, conferindo um toque de modernidade
                        e estilo único.Perfeita para acompanhar você em ocasiões especiais, como festas, casamentos
                        e baladas, esta bolsa é o acessório ideal para mulheres que valorizam o luxo e a praticidade.
                        Seus detalhes dourados adicionam um brilho sutil, enquanto sua alça transversal em couro macio
                        proporciona conforto incomparável ao carregar seus pertences essenciais.Apesar de seu tamanho
                        compacto, esta bolsa surpreende com sua capacidade de armazenamento, tornando-a ideal para o
                        dia a dia e para aqueles momentos em que você deseja se destacar com charme e elegância.
                        Além disso, seu fechamento com zíper personalizado da marca Gucci garante segurança e
                        praticidade,enquanto o forro interno personalizado oferece um toque de exclusividade.
                    </p>
                </div>

                <div class="grid-topico">
                    <div class="topico"></div>
                    <a class="text-topico">Mais itens da loja Studio Center</a>
                </div>

                <div class="container-recomendar col-10 ">
                    <div class="produto-recomendar row"></div>
                </div>
            </div>
    </main>

    <?php get_footer(); ?>

</body>
<script type="module" src="<?= get_base_url(); ?>assets/js/produto.js?<?= time() ?>"></script>
<script src="<?= get_base_url(); ?>assets/js/carrinho/apiCarrinho.js"></script>

</html>