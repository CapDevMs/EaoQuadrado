<?php
    include('../../config/funcoes.php');
    $appName = get_app_name();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $appName . ' - ' . $titulo ?? '' ?></title>
    <?php get_css(['cadastros/sobre']) ?>
</head>
<body>
    <?php get_header() ?>

    <main>
        <div id="sub-menu">
        <a href="index.php">
        <h6>Início</h6></a>
        <span>/</span>
        <a href="sobre.php">
        <h6>Sobre</h6>
        </a>
        </div>
        <div id="texto">
        <div id="título">Sobre a E².com</div> <br> <br>
        <div id="descricao">Lançada em 2024, a empresa E² veio para revolucionar o mercado de vendas online.<br> <br>

            Édini e Enilda queriam criar algo que mudasse não só suas próprias vidas, mas também as vidas de outras pessoas.
            Depois de tempos de trabalho árduo, finalmente lançaram seu produto: um aplicativo inovador que conectava clientes com vendedores em todo o território municipal de forma acessível, conveniente e humanizada. O lançamento foi modesto, mas elas acreditavam em sua ideia e estavam determinados a fazê-lo funcionar.
            <br><br>
            Com o tempo, o site começou a ganhar vários usuários. Os primeiros clientes ficaram impressionados com a qualidade do serviço e começaram as indicações.
            <br><br>
            Hoje, a E² é uma empresa reconhecida, com milhões de usuários em toda a cidade. Édini e Enilda lembram com carinho os tempos difíceis, onde sonhavam com um futuro melhor. Elas provaram que, com determinação, trabalho árduo e uma visão clara, é possível começar do zero e alcançar o sucesso além dos limites da imaginação.
            <br><br>
        </div>
        </div>
        <div id="imagem">
            <img src="../../assets/img/imagem-sobre-1.png">
            
        </div>
            
        <div id="comparativo">
            <img src="../../assets/img/comparativo-sobre.png" >
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
            <img src="../../assets/img/banner2-sobre.png" >
        </div>
            
    </main>

    <?php get_footer() ?> 
</body>
<script src="../../assets/js/script.js"></script>
</html>