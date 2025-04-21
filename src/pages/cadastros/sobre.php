<?php
include('../../config/funcoes.php');
$appName = get_app_name();
$baseUrl = get_base_url();

$comparativo = [
    [
        'titulo' => 'Vendedores ativos no site',
        'valor' => '10.5k',
        'icon' => 'fa fa-users'
    ],
    [
        'titulo' => 'Venda mensal',
        'valor' => '33k',
        'icon' => 'fa fa-dollar-sign'
    ],
    [
        'titulo' => 'Clientes ativos no site',
        'valor' => '45.5k',
        'icon' => 'fa fa-user'
    ],
    [
        'titulo' => 'Venda bruta anual no site',
        'valor' => '250k',
        'icon' => 'fa-solid fa-sack-dollar'
    ]
];

$titulo = 'Sobre nós';

$sobre_cards = [
    [
        'titulo' => 'Senac',
        'subtitulo' => 'Fundador e Presidente',
        'image' => $baseUrl . '/assets/img/sobre/logo-senac.png',
        'links' => [
            'twitter' => 'https://twitter.com/senac',
            'instagram' => 'https://instagram.com/senac',
            'linkedin' => 'https://linkedin.com/company/senac'
        ]
    ],
    [
        'titulo' => 'E²',
        'subtitulo' => 'Gerentes',
        'image' => $baseUrl . '/assets/img/sobre/mulher-oculos.png',
        'links' => [
            'twitter' => 'https://twitter.com/e2',
            'instagram' => 'https://instagram.com/e2',
            'linkedin' => 'https://linkedin.com/company/e2'
        ]
    ],
    [
        'titulo' => 'CapDev',
        'subtitulo' => 'Empresa de Desenvolvimento de Software',
        'image' => $baseUrl . '/assets/img/sobre/logo-capdev.png',
        'links' => [
            'twitter' => 'https://twitter.com/capdev',
            'instagram' => 'https://instagram.com/capdev',
            'linkedin' => 'https://linkedin.com/company/capdev'
        ]
    ]
];

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
                <?php foreach ($comparativo as $informacao): ?>
                    <div class="col-sm-12 col-md-6 col-lg-">
                        <div class="card-status ptb-2 mb-2">
                            <div class="status-icon ptb-1">
                                <i class="<?= $informacao['icon']; ?>"></i>
                            </div>
                            <p class="status-text pt-2"><?= $informacao['valor']; ?></p>
                            <p class="status-subtitle"><?= $informacao['titulo']; ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            
            <div class="row">
                <?php foreach ($sobre_cards as $card): ?>
                    <div class="col-sm-12 col-md-3 m-auto">
                        <div class="card-sobre pt-1">
                            <div class="card-body pt-1">
                                <div class="card-image">
                                    <img src="<?= $card['image']; ?>" alt="">
                                </div>
                                <div class="pb-1">
                                    <p class="card-sobre-titulo pl-1"><?= $card['titulo']; ?></p>
                                    <p class="card-sobre-subtitulo pl-1"><?= $card['subtitulo']; ?></p>
                                </div>
                                <div class="links">
                                    <a href="<?= $card['links']['twitter']; ?>" target="_blank">
                                        <i class="fa-brands fa-twitter"></i>
                                    </a>
                                    <a href="<?= $card['links']['instagram']; ?>" target="_blank">
                                        <i class="fa-brands fa-instagram"></i>
                                    </a>
                                    <a href="<?= $card['links']['linkedin']; ?>" target="_blank">
                                        <i class="fa-brands fa-linkedin"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="row pt-2">
                <div class="col-sm-12 col-md-4 pb-2">
                    <div class="info-icon m-auto ptb-1">
                        <i class="fa-solid fa-truck"></i>
                    </div>
                    <p class="info-text text-uppercase pt-2">
                        Entrega Grátis
                    </p>
                    <p class="info-subtitulo">
                        Para toda Campo Grande - MS
                    </p>
                </div>
                <div class="col-sm-12 col-md-4 pb-2">
                    <div class="info-icon m-auto ptb-1">
                        <i class="fa-solid fa-headset"></i>
                    </div>
                    <p class="info-text text-uppercase pt-2">
                        ATENDIMENTO AO CLIENTE 24H
                    </p>
                    <p class="info-subtitulo">
                        Suporte customizado
                    </p>
                </div>
                <div class="col-sm-12 col-md-4 pb-2">
                    <div class="info-icon m-auto ptb-1">
                        <i class="fa-solid fa-money-bill-transfer"></i>
                    </div>
                    <p class="info-text text-uppercase pt-2">
                        7% DE CASHBACK
                    </p>
                    <p class="info-subtitulo">
                        Devolução instatânea
                    </p>
                </div>
            </div>
        </div>

    </main>

    <?php get_footer() ?>
</body>
<script src="../../assets/js/script.js"></script>

</html>