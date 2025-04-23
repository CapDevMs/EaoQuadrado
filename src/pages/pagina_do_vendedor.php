<?php
include(__DIR__ . '/../config/funcoes.php');
$appName = get_app_name();
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $appName . ' - ' . $titulo ?? '' ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <?php get_css(['cliente/pagina_vendedor', 'style']) ?>
    <?php get_css_components() ?>
</head>

<body>
    <?php get_header(); ?>

    <main>
        <!-- <asside class="sidebar col-3 col-sm-hidden">
            <div class="container">
                <span>Local para receber o sidebar</span>
            </div>
        </asside>  -->

        <section class="col-sm-12">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 pb-3">
                        <img src="../assets/img/Banner_loja.png" class="img banner_loja" alt="Banner da Loja">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 pb-4">
                        <banner_vendedor class="card">
                        </banner_vendedor>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="content-header-section">
                            <div class="block-green"></div>
                            <p class="text-primary">Nossos Produtos</p>
                        </div>
                    </div>
                </div>

                <div class="row">

                </div>

                <card-produto class="row"></card-produto>

                

            </div>
        </section>
    </main>


    <script type="module" src="../assets/js/pagina_do_vendedor.js?<?= time(); ?>"></script>
    <?php get_footer(); ?>
</body>

</html>