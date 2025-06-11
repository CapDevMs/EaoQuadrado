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
            <div class="grid-conteudo">
                <div id="grid-produto" class="col-sm-6">
                    <div id="galeria-imagem"><galeria-img></galeria-img></div>
                    <div class="desc-produto">
                        <h2>Bolsa Gucci</h2>
                        <h1 class="preco">R$ 989,00</h1>
                        <div>
                            <h4>Cores:</h4>
                        </div>
                        <div id="contadorBtn"></div>
                        <div id="comprar">
                            <div id="btn-comprar"><a>Comprar</a></div>
                            <div id="icons-comprar">
                                
                                <img class = 'cursor' onclick = "window.location.href='<?=get_base_url();?>admin/carrinho'" id="MandarCarrinho icon" src="<?= get_base_url(); ?>assets/img/carrinho-tela-produto.svg" value="gucci_bolsa_intense.png|Gucci intense|400,00">
                                
                                <img class = 'cursor' onclick = "window.location.href='<?=get_base_url();?>favoritos'" src="<?= get_base_url(); ?>assets/img/coracao-tela-produto.svg">
                            </div>

                        </div>
                        <div id="troca">
                            <img src="<?= get_base_url(); ?>assets/img/tela-produtos/Icon-return.png">
                            <a>Troca e Devolução</a>
                            <a id="dias">Em até 30 dias</a>
                        </div>
                        <div>
                            <fieldset id="loja">
                                <img id='imagem-loja' src="<?= get_base_url(); ?>assets/img/tela-produtos/loja.png">
                                <a><span style="color: #16A18E;">Loja</span> Studio Center</a>
                                <div id="icons-loja">
                                    <img src="<?= get_base_url(); ?>assets/img/coracao-tela-produto.svg" id="loja-coracao">
                                    <img src="<?= get_base_url(); ?>assets/img/tela-produtos/Whatsapp.png" id="loja-whats">
                                </div>
                            </fieldset>
                        </div>

                    </div>
                </div>
                <div class="line"></div>
                <div class="descricao">
                    <h5 style="margin-bottom: 2%;">descrição do produto </h5>
                    <a style=" color: #7D8184;">Eleve o seu estilo com a
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
                    </a>

                    <?php
                    foreach ($todosProdutos as $produto): ?>
                        <p>
                            ID: <?= $produto['id_produto']; ?> - Nome: <?= $produto['nome']; ?>
                        </p>

                    <?php endforeach; ?>


                </div>

                <div class="grid-topico">
                    <div class="topico"></div>
                    <a class="text-topico">Mais itens da loja Studio Center</a>
                </div>

                <div class="grid-recomendar">

                    <div class="produto-recomendar">
                        <div class="img-small-recomendar">
                            <img src="<?= get_base_url(); ?>assets/img/tela-produtos/bolsa.png">
                            <div class="icon">
                                <img src="<?= get_base_url(); ?>assets/img/tela-produtos/Vector.png" alt="coração-icon">
                                <img class='icon' src="<?= get_base_url(); ?>assets/img/tela-produtos/Cart1.png" alt="Carrinho-icon">
                            </div>
                        </div>
                        <div class="text-produto">
                            <h3>HAVIT HV-G92 Controle USB</h3>
                            <a class="preco-recomendar">R$400</a>
                        </div>
                    </div>





                    <div class="produto-recomendar">
                        <div class="img-small-recomendar">
                            <img src="<?= get_base_url(); ?>assets/img/tela-produtos/bolsa.png">
                            <div class="icon">
                                <img src="<?= get_base_url(); ?>assets/img/tela-produtos/Vector.png" alt="coração-icon">
                                <img class='icon' src="<?= get_base_url(); ?>assets/img/tela-produtos/Cart1.png" alt="Carrinho-icon">
                            </div>
                        </div>

                        <div class="text-produto">
                            <h3>HAVIT HV-G92 Controle USB</h3>
                            <a class="preco-recomendar">R$400</a>
                        </div>
                    </div>

                    <div class="produto-recomendar">
                        <div class="img-small-recomendar">
                            <img src="<?= get_base_url(); ?>assets/img/tela-produtos/bolsa.png">
                            <div class="icon">
                                <img src="<?= get_base_url(); ?>assets/img/tela-produtos/Vector.png" alt="coração-icon">
                                <img class='icon' src="<?= get_base_url(); ?>assets/img/tela-produtos/Cart1.png" alt="Carrinho-icon">
                            </div>
                        </div>
                        <div class="text-produto">
                            <h3>HAVIT HV-G92 Controle USB</h3>
                            <a class="preco-recomendar">R$400</a>
                        </div>
                    </div>

                    <div class="produto-recomendar">
                        <div class="img-small-recomendar">
                            <img src="<?= get_base_url(); ?>assets/img/tela-produtos/bolsa.png">
                            <div class="icon">
                                <img src="<?= get_base_url(); ?>assets/img/tela-produtos/Vector.png" alt="coração-icon">
                                <img class='icon' src="<?= get_base_url(); ?>assets/img/tela-produtos/Cart1.png" alt="Carrinho-icon">
                            </div>
                        </div>
                        <div class="text-produto">
                            <h3>HAVIT HV-G92 Controle USB</h3>
                            <a class="preco-recomendar">R$400</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php get_footer(); ?>

</body>
<script type="module" src="<?= get_base_url(); ?>assets/js/produto.js?<?= time() ?>"></script>
<script src="<?= get_base_url(); ?>assets/js/carrinho/apiCarrinho.js"></script>

</html>