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
    <?php get_css(['cliente/pagina_vendedor']) ?>
</head>
<body>
    <?php get_header(); ?>

    <main class="row">
        <asside class="sidebar col-3 col-sm-hidden">
            <div class="container">
                <span>Local para receber o sidebar</span>
            </div>
        </asside> 

        <section class="col-9 col-sm-12">
            <div class="container">
                <div class="row">
                    <div class="col-12 pb-3">
                        <img src="../assets/img/Banner_loja.png" class="img" alt="Banner da Loja"> 
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="col-2">
                                    <p>imagem aqui</p>
                                </div>
                                <div class="col-8">
                                    <div class="row">
                                        <div class="col-12">
                                            <h2>Studio Center</h2>
                                        </div>
                                    </div>
                                    <div class="row pt-3">
                                        <div class="col-12">
                                            <a href="mailto:studiocenterpy@gmail.com">studiocenterpy@gmail.com</a>
                                        </div>
                                    </div>
                                    <div class="row pt-3">
                                        <div class="col-12">
                                            <p>Av. 15 de Agosto, 506, Centro</p>
                                            <p>Campo Grande - MS</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="row">
                                        <div class="col-12">
                                            <p>Avaliações: </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2">
                                            <img src="" alt="">
                                        </div>
                                        <div class="col-10">
                                            <a target="_blank" href="https://wa.me/556734377000">(67) 3437-7000</a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <img src="" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>


    <?php get_footer(); ?>    
</body>
</html>