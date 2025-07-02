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
                
            </painelProdutos>
        </blocoPrincipal>

        <totalCompra class="totalCompra col-10 col-sm-11 ">

            <div class="col-12 linhaTotalCompra">
                <span class="col-3 col-sm-5">Subtotal</span>
                <totalCompraSubtotal class="col-3 col-sm-5 empurrarFinal">...</totalCompraSubtotal>
            </div>

            <hr class='hr'>
            <div class="col-12 linhaTotalCompra">
                <span class="col-3 col-sm-5">Frete:</span>
                <span class="col-3 col-sm-5 empurrarFinal">A combinar</span>
            </div>
            <hr class='hr'>
            <div class="col-12 linhaTotalCompra">
                <span class="col-3 col-sm-5">Total:</span>
                <totalCompraTotal class="col-3 col-sm-5 empurrarFinal">...</totalCompraTotal>
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
    <script src="src/public/assets/js/carrinho.js">
    </script>
    <?php get_footer() ?>
</body>