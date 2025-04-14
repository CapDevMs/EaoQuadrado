<?php
include('../../config/funcoes.php');
$appName = get_app_name();
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title><?= $appName . ' - ' . $titulo ?? '' ?></title>
    <?php get_css(['cadastros/sobre', 'style']) ?>
    <?php get_css_components(); ?>
</head>

<body>
    <?php get_header() ?>

    <main>
        <!-- Local para o Roadmap -->

        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-xl-6">
                    <h1 class="pb-2">
                        Sobre a E².com
                    </h1>
                    <p class="pb-1 text-justify">
                        Lançada em 2024, a empresa E² veio para revolucionar o mercado de vendas online.
                    </p>
                    <p class="pb-1 text-justify">
                        Édini e Enilda queriam criar algo que mudasse não só suas próprias vidas, mas também as vidas de outras pessoas.
                        Depois de tempos de trabalho árduo, finalmente lançaram seu produto: um aplicativo inovador que conectava clientes com vendedores em todo o território municipal de forma acessível, conveniente e humanizada. O lançamento foi modesto, mas elas acreditavam em sua ideia e estavam determinados a fazê-lo funcionar.
                    </p>
                    <p class="pb-1 text-justify">
                        Com o tempo, o site começou a ganhar vários usuários. Os primeiros clientes ficaram impressionados com a qualidade do serviço e começaram as indicações.
                    </p>
                    <p class="pb-1 text-justify">
                        Hoje, a E² é uma empresa reconhecida, com milhões de usuários em toda a cidade. Édini e Enilda lembram com carinho os tempos difíceis, onde sonhavam com um futuro melhor. Elas provaram que, com determinação, trabalho árduo e uma visão clara, é possível começar do zero e alcançar o sucesso além dos limites da imaginação.
                    </p>
                </div>
                <div class="col-sm-12 col-xl-6">
                    <img src="../../assets/img/imagem-sobre-1.png">
                </div>
            </div>
        </div>
        
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card-status ptb-1">
                        <div class="status-icon ptb-1">
                            <i class="fa fa-shop"></i>
                        </div>
                        <p class="status-text">10.5k</p>
                        <p class="status-subtitle">Vendedores ativos no site</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card-status ptb-1">
                        <i class="fa-solid fa-dollar-sign"></i>
                        <p class="status-text">33k</p>
                        <p class="status-subtitle">Venda mensal</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card-status ptb-1">
                        <i class="fa-solid fa-user"></i>
                        <p class="status-text">45.5k</p>
                        <p class="status-subtitle">Clientes ativos no site</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card-status ptb-1">
                        <i class="fa-solid fa-sack-dollar"></i>
                        <p class="status-text">250k</p>
                        <p class="status-subtitle">Venda bruta anual no site</p>
                    </div>
                </div>
            </div>
        </div>

        <div id="comparativo">
            <img src="../../assets/img/comparativo-sobre.png">
        </div>

        <div id="banner">
            <img src="../../assets/img/banner-sobre.png" alt="Banner">
            <div id="links">
                <a href="https://twitter.com" target="_blank">
                    <img src="../../assets/img/link-twitter.png" alt="Twitter">
                </a>
                <a href="https://instagram.com" target="_blank">
                    <img src="../../assets/img/link-instagram.png" alt="Instagram">
                </a>
                <a href="https://linkedin.com" target="_blank">
                    <img src="../../assets/img/link-likedin.png" alt="LinkedIn">
                </a>
                <a href="https://twitter.com" target="_blank">
                    <img src="../../assets/img/link-twitter.png" alt="Twitter">
                </a>
                <a href="https://instagram.com" target="_blank">
                    <img src="../../assets/img/link-instagram.png" alt="Instagram">
                </a>
                <a href="https://linkedin.com" target="_blank">
                    <img src="../../assets/img/link-likedin.png" alt="LinkedIn">
                </a>
                <a href="https://twitter.com" target="_blank">
                    <img src="../../assets/img/link-twitter.png" alt="Twitter">
                </a>
                <a href="https://instagram.com" target="_blank">
                    <img src="../../assets/img/link-instagram.png" alt="Instagram">
                </a>
                <a href="https://linkedin.com" target="_blank">
                    <img src="../../assets/img/link-likedin.png" alt="LinkedIn">
                </a>
            </div>
        </div>



        <div id="banner2">
            <img src="../../assets/img/banner2-sobre.png">
        </div>

    </main>

    <?php get_footer() ?>
</body>
<script src="../../assets/js/script.js"></script>

</html>