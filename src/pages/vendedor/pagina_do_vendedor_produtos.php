<?php
    include('../../config/funcoes.php');
    $appName = get_app_name();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/base.css">
    <link rel="stylesheet" href="../../assets/css/vendedor/pagina_do_vendedor.css">
    <link rel="shortcut icon" href="../../assets/img/logo.png">
    <?php get_css(['vendedor/pagina_do_vendedor_produtos', 'styles']) ?>

    <title>E ao Quadrado</title>
</head>

<body>
    <?php get_header() ?>

    <main class="container">
    <div class="grid-topico-mais-produtos">
                <div class="elemento-verde"></div>
                <div class="titulo-topico">Nossos Produtos</div>
            </div>
            <div class="grid-produtos-pagina-vendedor">
                <div class="grid-item-produtos-pagina-vendedor">
                    <div class="container-foto">
                        <img class="img-produto" src="../../assets/img/imgs-produtos/racao.avif">
                    </div>
                    <div class="container-coracao-carrinho">
                        <img class="icones-coracao-carrinho" src="../../assets/img/icone-coracao.svg" alt="like" />
                        <img class="icones-coracao-carrinho" src="../../assets/img/icone-carrinho.svg" alt="cart" />
                    </div>
                    <div class="container-nome-produto">
                        <h3 class="nome-produto">Ração Cachorro Pedigree 20kg</h3>
                    </div>
                    <div class="container-preco-produto">
                        <h3 class="preco-produto">R$119,90</h3>
                    </div>
                </div>
                <div class="grid-item-produtos-pagina-vendedor">
                    <div class="container-foto">
                        <img class="img-produto" src="../../assets/img/imgs-produtos/foto-camera.png">
                    </div>
                    <div class="container-coracao-carrinho">
                        <img src="../../assets/img/icone-coracao.svg" alt="like" />
                        <img src="../../assets/img/icone-carrinho.svg" alt="cart" />
                    </div>
                    <div class="container-nome-produto">
                        <h3 class="nome-produto">CANON EOS DSLR Camera</h3>
                    </div>
                    <div class="container-preco-produto">
                        <h3 class="preco-produto">R$499,90</h3>
                    </div>
                </div>
                <div class="grid-item-produtos-pagina-vendedor">
                    <div class="container-foto">
                        <img class="img-produto" src="../../assets/img/imgs-produtos/foto-notebook.png">
                    </div>
                    <div class="container-coracao-carrinho">
                        <img src="../../assets/img/icone-coracao.svg" alt="like" />
                        <img src="../../assets/img/icone-carrinho.svg" alt="cart" />
                    </div>
                    <div class="container-nome-produto">
                        <h3 class="nome-produto">Notebook Gamer ASUS</h3>
                    </div>
                    <div class="container-preco-produto">
                        <h3 class="preco-produto">R$1.119,90</h3>
                    </div>
                </div>
                <div class="grid-item-produtos-pagina-vendedor">
                    <div class="container-foto">
                        <img class="img-produto" src="../../assets/img/imgs-produtos/foto-curology-kit.png">
                    </div>
                    <div class="container-coracao-carrinho">
                        <img src="../../assets/img/icone-coracao.svg" alt="like" />
                        <img src="../../assets/img/icone-carrinho.svg" alt="cart" />
                    </div>
                    <div class="container-nome-produto">
                        <h3 class="nome-produto">Curology Product Set</h3>
                    </div>
                    <div class="container-preco-produto">
                        <h3 class="preco-produto">R$259,90</h3>
                    </div>
                </div>
                <div class="grid-item-produtos-pagina-vendedor">
                    <div class="container-foto">
                        <div class="etiqueta-produto-novo">Novo</div>
                        <img class="img-produto" src="../../assets/img/imgs-produtos/foto-carrinho-infantil.png">
                    </div>
                    <div class="container-coracao-carrinho">
                        <img src="../../assets/img/icone-coracao.svg" alt="like" />
                        <img src="../../assets/img/icone-carrinho.svg" alt="cart" />
                    </div>
                    <div class="container-nome-produto">
                        <h3 class="nome-produto">Carrinho Infantil Turbo</h3>
                    </div>
                    <div class="container-preco-produto">
                        <h3 class="preco-produto">R$389,90</h3>
                    </div>
                </div>
                <div class="grid-item-produtos-pagina-vendedor">
                    <div class="container-foto">
                        <img class="img-produto" src="../../assets/img/imgs-produtos/foto-chuteira-adidas.png">
                    </div>
                    <div class="container-coracao-carrinho">
                        <img src="../../assets/img/icone-coracao.svg" alt="like" />
                        <img src="../../assets/img/icone-carrinho.svg" alt="cart" />
                    </div>
                    <div class="container-nome-produto">
                        <h3 class="nome-produto">Chuteira Adidas</h3>
                    </div>
                    <div class="container-preco-produto">
                        <h3 class="preco-produto">R$99,90</h3>
                    </div>
                </div>
                <div class="grid-item-produtos-pagina-vendedor">
                    <div class="container-foto">
                        <img class="img-produto" src="../../assets/img/imgs-produtos/foto-controle-ps5.png">
                    </div>
                    <div class="container-coracao-carrinho">
                        <img src="../../assets/img/icone-coracao.svg" alt="like" />
                        <img src="../../assets/img/icone-carrinho.svg" alt="cart" />
                    </div>
                    <div class="container-nome-produto">
                        <h3 class="nome-produto">Controle Dualsense PS5</h3>
                    </div>
                    <div class="container-preco-produto">
                        <h3 class="preco-produto">R$329,50</h3>
                    </div>
                </div>
                <div class="grid-item-produtos-pagina-vendedor">
                    <div class="container-foto">
                        <img class="img-produto" src="../../assets/img/imgs-produtos/foto-camiseta-tommy.png">
                    </div>
                    <div class="container-coracao-carrinho">
                        <img src="../../assets/img/icone-coracao.svg" alt="like" />
                        <img src="../../assets/img/icone-carrinho.svg" alt="cart" />
                    </div>
                    <div class="container-nome-produto">
                        <h3 class="nome-produto">Camiseta Tommy Hilfiger</h3>
                    </div>
                    <div class="container-preco-produto">
                        <h3 class="preco-produto">R$199,90</h3>
                    </div>
                </div>
            </div>
            <div class="container-botao-ver-mais">
                <div id="botao-ver-mais">
                    <p id="ver-mais">Ver Mais
                    </p>
                </div>
            </div>
        
    </main>

    <?php get_footer() ?>
</body>
<script src="../../assets/js/script.js"></script>

</html>