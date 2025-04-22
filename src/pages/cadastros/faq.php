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
    <?php get_css(['cadastros/faq']) ?>
</head>
<body>
    <?php get_header() ?>

    <main>
        <div id="sub-menu">FAQ</div>
        <div id="texto">Perguntas Frequentes sobre o nosso E-commerce:<br>

            <h2 class = 'subtitulo'>1 - Como faço para vender no site?</h2>
            <p class = 'texto'>• Para começar a vender, você precisa se cadastrar e passar por uma avaliação inicial. Novos vendedores são submetidos a uma avaliação durante suas primeiras vendas antes de se tornarem permanentes na plataforma.</p><br><br>
            
            <h2 class = 'subtitulo'>2 - Como funciona o processo de compra?</h2>
            <p class = 'texto'>• Todas as compras são intermediadas pelo nosso site. Após a confirmação do pedido ocorre direcionamento para cliente falar com vendedor e combinar entrega, após recebido o pedido o cliente podera avaliar sua compra.</p><br><br>
            
            <h2 class = 'subtitulo'>3 - Como os vendedores adicionam produtos ao site?</h2>
            <p class = 'texto'>• Os vendedores têm acesso para listar e gerenciar seus produtos diretamente no site. Nosso sistema facilita a comunicação entre vendedores e clientes durante todo o processo de venda.</p><br><br>
            
            <h2 class = 'subtitulo'>4 - Existe um sistema de avaliações para os vendedores?</h2>
            <p class = 'texto'>• Sim, temos um sistema de avaliação onde os clientes podem avaliar os vendedores. Todas as avaliações são moderadas para garantir a qualidade dos serviços prestados.</p><br><br>
            
            <h2 class = 'subtitulo'>5 - Quais são as opções de entrega disponíveis?</h2>
            <p class = 'texto'>• Oferecemos entrega local com taxa fixa dentro de nossa área de serviço. Além disso, disponibilizamos opções para retirada na loja ou combinação de entrega direta entre vendedor e cliente.</p><br><br>
            
            <h2 class = 'subtitulo'>6 - Quais métodos de pagamento são aceitos?</h2>
            <p class = 'texto'>• Os métodos de pagamento são a combinar com o vendedor. Isso proporciona flexibilidade para adaptar-se às necessidades de ambos os lados da transação.</p><br><br>
            
            <h2 class = 'subtitulo'>7 - Como é garantida a segurança das transações?</h2>
            <p class = 'texto'>• Implementamos rigorosas medidas de segurança para proteger as transações e garantir a conformidade com nossos termos de serviço.</p><br><br>
            
            </div>
            <a class="btn-home" href="index.php">
            <button id="retorno" type="button">Retorne ao início</button>
            </a>
    </main>

    <?php get_footer() ?>
</body>
<script src="../../assets/js/script.js"></script>
</html>