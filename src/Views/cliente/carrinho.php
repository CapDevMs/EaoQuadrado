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

    <main class='main col-12'>
        <roadMap>
            <?php breadcrumb(array('http://localhost/EaoQuadrado' => 'Home', 'carrinho' => 'Carrinho')); ?>
        </roadMap>
        <bloco class=''>
            <h3>Carrinho</h3>
            <painel>
                <produto class='col-10 produto row'>
                    <div class='col-2'>
                        <img src="src/public/assets/img/asus_notebook.png" alt="foto-produto" class='imagem'>
                    </div>
                    <div class='col-2'>
                        <titulo>Titulo Generico</titulo>
                        <texto>Nome esquisito que o vendedor vai colocar</texto>
                    </div>
                    <div class='col-2'>
                        <titulo>Titulo Generico</titulo>
                        <texto>Nome esquisito que o vendedor vai colocar</texto>

                    </div>
                    <div class='col-2'>
                        <titulo>Titulo Generico</titulo>
                        <texto>Nome esquisito que o vendedor vai colocar</texto>
                    </div>
                    <div class='col-2'>
                        <titulo>Titulo Generico</titulo>
                        <texto>Nome esquisito que o vendedor vai colocar</texto>
                    </div>
                    <div class='col-2'>
                        <titulo>Titulo Generico</titulo>
                        <texto>Nome esquisito que o vendedor vai colocar</texto>
                    </div>
                </produto>
            </painel>
        </bloco>
        <div class="totalizador col-10">
            <div class="totalLine">
                <span class='span'>Subtotal</span>
                <span class="span total">...</span>
            </div>
            <hr class='hr'>
            <div class="totalLine">
                <span class='span'>Frete:</span>
                <span class="span">A combinar</span>
            </div>
            <hr class='hr'>
            <div class="totalLine">
                <span class='span'>Total:</span>
                <span class="span total2">...</span>
            </div>

            <div class="totalLine">
                <button class='botao1' onclick="voltarPagina()">Retorne as compras</button>

                <a href='https://web.whatsapp.com/' style="max-width: fit-content;"><button id='ApagarCarrinho' class='botao2' onclick='LimparCarrinho()'>Ir ao Whatsapp</button></a>

            </div>
        </div>
    </main>

    <script src="<?php get_base_url(); ?>assets/js/script.js"></script>
    <script src="<?php get_base_url(); ?>assets/js/carrinho/script.js"></script>
    <script src="<?php get_base_url(); ?>assets/js/carrinho/apiCarrinho.js"></script>
    <?php get_footer() ?>
</body>