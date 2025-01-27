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
    <?php get_css(['vendedor/pagina_do_vendedor_2.css']) ?>

    <title>E ao Quadrado</title>
</head>

<body>
    <?php get_header() ?>

    <main>
        <h4 id="roadmap">Home / Studio Center</h4>
        <div class="container">
            <img src="../../assets/img/img-pagina-do-vendedor/foto_banner_pagina_vendedor.png" id="foto-banner" alt="foto-banner-vendedor">
            <div class="grid-container-perfil-vendedor">
                <div class="grid-item-perfil-vendedor" id="logo-perfil-vendedor">
                    <div class="container-logo-loja">
                        <img src="../../assets/img/img-pagina-do-vendedor/logo_studio_center.png" alt="logo-loja" id="logo-loja" />
                    </div>
                </div>
                <div class="grid-item-perfil-vendedor">
                    <h2 class="grid-infos-perfil-vendedor" id="nome-loja">Studio Center</h2>
                    <a class="grid-infos-perfil-vendedor" id="email-loja"
                        href="mailto:studiocenterpy@gmail.com">studiocenterpy@gmail.com</a>
                    <p class="grid-infos-perfil-vendedor" id="endereco-loja">Av. 15 de Agosto, 506, Centro
                        <br>
                        Campo Grande - MS
                    </p>
                </div>
                <div class="grid-item-perfil-vendedor">
                    <div class="grid-avaliacao-telefone">
                        <h3 id="avaliacao">Avaliação:</h3>
                        <img src="../../assets/img/img-pagina-do-vendedor/icons/Five star.png" class="grid-avaliacao-telefone" alt="estrela5"
                            id="estrelinha-perfil-vendedor">
                        <img src="../../assets/img/img-pagina-do-vendedor/icons/whatsapp-logo.png" id="whatsapp-logo">
                        <h3 id="telefone">(67) 3437-7000</h3>
                    </div>
                </div>
            </div>
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
                        <img class="icones-coracao-carrinho" src="../../assets/img/img-pagina-do-vendedor/icons/icone-coracao.svg" alt="like" />
                        <img class="icones-coracao-carrinho" src="../../assets/img/img-pagina-do-vendedor/icons/icone-carrinho.svg" alt="cart" />
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
                        <img src="../../assets/img/img-pagina-do-vendedor/icons/icone-coracao.svg" alt="like" />
                        <img src="../../assets/img/img-pagina-do-vendedor/icons/icone-carrinho.svg" alt="cart" />
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
                        <img src="../../assets/img/img-pagina-do-vendedor/icons/icone-coracao.svg" alt="like" />
                        <img src="../../assets/img/img-pagina-do-vendedor/icons/icone-carrinho.svg" alt="cart" />
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
                        <img src="../../assets/img/img-pagina-do-vendedor/icons/icone-coracao.svg" alt="like" />
                        <img src="../../assets/img/img-pagina-do-vendedor/icons/icone-carrinho.svg" alt="cart" />
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
                        <img src="../../assets/img/img-pagina-do-vendedor/icons/icone-coracao.svg" alt="like" />
                        <img src="../../assets/img/img-pagina-do-vendedor/icons/icone-carrinho.svg" alt="cart" />
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
                        <img src="../../assets/img/img-pagina-do-vendedor/icons/icone-coracao.svg" alt="like" />
                        <img src="../../assets/img/img-pagina-do-vendedor/icons/icone-carrinho.svg" alt="cart" />
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
                        <img src="../../assets/img/img-pagina-do-vendedor/icons/icone-coracao.svg" alt="like" />
                        <img src="../../assets/img/img-pagina-do-vendedor/icons/icone-carrinho.svg" alt="cart" />
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
                        <img src="../../assets/img/img-pagina-do-vendedor/icons/icone-coracao.svg" alt="like" />
                        <img src="../../assets/img/img-pagina-do-vendedor/icons/icone-carrinho.svg" alt="cart" />
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
            <div class="grid-topico-mais-produtos">
                <div class="elemento-verde"></div>
                <div class="titulo-topico ">Avaliações e Comentários</div>
            </div>
            <div class="container-comentarios">
                <div class="comentario">
                    <img src="../../assets/img/img-pagina-do-vendedor/icons/icone_perfil.png" class="foto" alt="alguem">
                    <h1>Alcir Junior</h1>
                    <img src="../../assets/img/img-pagina-do-vendedor/icons/Five star.png" class="estrelinha5" alt="estrela5">
                    <p>Chegou tudo certinho, dentro do prazo, a embalagem intacta, o produto com todas as proteções
                        plásticos, isopor.... funciona perfeitamente já fiz o teste e é ótima.</p>
                </div>
                <div class="comentario">
                    <img src="../../assets/img/img-pagina-do-vendedor/icons/icone_perfil.png" class="foto" alt="alguem">
                    <h1>Andrey Silva</h1>
                    <img src="../../assets/img/img-pagina-do-vendedor/icons/Five star.png" class="estrelinha5" alt="estrela5">
                    <p>Comprei uma chuteira muito boa. Excelente! Podem comprar sem medo. Jogo bola a minha vida inteira
                        e posso afirmar que a chuteira é boa. Não sei a durabilidade, só o tempo vai dizer, mas fica
                        muito boa no pé.</p>
                </div>
                <div class="comentario">
                    <img src="../../assets/img/img-pagina-do-vendedor/icons/icone_perfil.png" class="foto" alt="alguem">
                    <h1>Fátima Bernardes</h1>
                    <img src="../../assets/img/img-pagina-do-vendedor/icons/Four Star.png" class="estrelinha4" alt="estrela4">
                    <p>O produto que eu comprei veio na cor errada, mas o vendedor me ajudou, e consegui fazer a troca.
                        Apesar do ocorrido, recomendo!!</p>
                </div>
            </div>
            <div class="container-botao-ver-mais">
                <div id="botao-ver-mais-comentarios">
                    <p id="frase-ver-mais-comentarios">Ver Mais Comentários
                    </p>
                </div>
            </div>
           <br><br>
        </div>
    </main>

    <?php get_footer() ?>
</body>
<script src="../../assets/js/script.js"></script>

</html>