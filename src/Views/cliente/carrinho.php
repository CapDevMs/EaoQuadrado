<?php
$appName = get_app_name();
$titulo = 'EaoQuadrado - Contas Inativas';
?>

<?php
$base_url = get_base_url();
?>
<?= $base_url; ?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $appName . ' - ' . $titulo ?? '' ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <?php get_css(['style', 'base', 'carrinho', 'sidebar']) ?>
    <?php get_css_components() ?>
    <?php get_breadcrumbs() ?>

</head>

<body>
    <?php get_header() ?>

    <main class="main">
        <roadMap>
            <?php breadcrumb(array('http://localhost/EaoQuadrado' => 'Home', 'carrinho' => 'Carrinho')); ?>
        </roadMap>

        <blocoPrincipal class='blocoPrincipal col-11'>
            <div class=''>
                <h3 class='redutor '>Carrinho</h3>
            </div>

            <painelProdutos class='painelProdutos'>
                <produto class="produto">
                    <div class='col-2 baseBlocoIcone'>
                        <img src="src/public/assets/img/asus_notebook.png" alt="foto-produto" class='imagem'>
                    </div>

                    <div class="col-md-9 col-12 blocoCentralProduto flexColuna-sr">

                        <div class="col-md-6 col-12 flexLinha-nr flexbetween-nr blocoNome">

                            <div class='col-md-6 col-12 baseBlocoProduto'>
                                <h4 class='miniBloco1 '>Nome</h4>
                                <texto class='miniBloco2'><span class="redutor nomeGrande">Nome esquisito AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA BOLSONARO ME AJUDA EU SOU UM BEBÊ AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAque o vendedor vai colocar e talvez seja tão filho da puta de grande que foda meu componente inteiro, isso não deveria ser meu problema mas aparentemente é pq eu n faço a mais puta ideia de como eles fazem em outros sites</span></texto>
                            </div>

                            <div class='col-6 sumidão baseBlocoProduto'>
                                <h4 class='miniBloco1 '>Preço</h4>
                                <texto class='miniBloco2'>R$ ...</texto>
                            </div>

                        </div>

                        <div class="col-md-6 col-12 flexLinha-nr flexbetween-nr">

                            <div class='col-6 baseBlocoProduto'>
                                <h4 class='miniBloco1'>Quantidade</h4>
                                <texto class='miniBloco2'><input type="Number" class='counter' min='0' value=1></texto>
                            </div>

                            <div class='col-6 baseBlocoProduto'>
                                <h4 class='miniBloco1'>Subtotal</h4>
                                <texto class='miniBloco2'>R$ ...</texto>
                            </div>

                        </div>

                    </div>


                    <div class="col-1 baseBlocoIcone">
                        <img class='redutor icone' src="src/public/assets/img/icons/Icon_lixeira.png" alt="icone">
                    </div>
                </produto>
            </painelProdutos>
        </blocoPrincipal>

        <totalCompra class="totalCompra col-10 col-sm-11 ">

            <div class="col-12 linhaTotalCompra">
                <span class="col-3 col-sm-5">Subtotal</span>
                <span class="col-3 col-sm-5 empurrarFinal">...</span>
            </div>

            <hr class='hr'>
            <div class="col-12 linhaTotalCompra">
                <span class="col-3 col-sm-5">Frete:</span>
                <span class="col-3 col-sm-5 empurrarFinal">A combinar</span>
            </div>
            <hr class='hr'>
            <div class="col-12 linhaTotalCompra">
                <span class="col-3 col-sm-5">Total:</span>
                <span class="col-3 col-sm-5 empurrarFinal">...</span>
            </div>

            <div class="col-12 linhaTotalCompra">
                <div class="flexCentro">
                    <button class="baseBotao" onclick="voltarPagina()">Retorne as compras</button>
                </div>
                <div class="flexCentro">
                    <button class="baseBotao botaoWhatsApp" onclick='LimparCarrinho()' id='ApagarCarrinho'>Ir ao Whatsapp</button>
                </div>
            </div>

        </totalCompra>
    </main>

    <?php get_footer() ?>
</body>