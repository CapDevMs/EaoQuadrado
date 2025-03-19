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
        <div id="menu">FAQ</div>
        <div id="sub-menu">FAQ</div>
        <div id="texto">Perguntas Frequentes sobre o nosso E-commerce:<br> <br>

            <span class = 'subtitulo'>1 - Como faço para vender no site?</span> <br> <br> 
            <span class = 'texto'>• Para começar a vender, você precisa se cadastrar e passar por uma avaliação inicial. Novos vendedores são submetidos a uma avaliação durante suas primeiras vendas antes de se tornarem permanentes na plataforma.</span><br><br>
            
            <span class = 'subtitulo'>2 - Como funciona o processo de compra?</span><br><br>
            <span class = 'texto'>• Todas as compras são intermediadas pelo nosso site. Após a confirmação do pedido ocorre direcionamento para cliente falar com vendedor e combinar entrega, após recebido o pedido o cliente podera avaliar sua compra.</span><br><br>
            
            <span class = 'subtitulo'>3 - Como os vendedores adicionam produtos ao site?</span><br><br>
            <span>• Os vendedores têm acesso para listar e gerenciar seus produtos diretamente no site. Nosso sistema facilita a comunicação entre vendedores e clientes durante todo o processo de venda.</span><br><br>
            
            <span class = 'subtitulo'>4 - Existe um sistema de avaliações para os vendedores?</span><br><br>
            <span class = 'texto'>• Sim, temos um sistema de avaliação onde os clientes podem avaliar os vendedores. Todas as avaliações são moderadas para garantir a qualidade dos serviços prestados.</span><br><br>
            
            <span class = 'subtitulo'>5 - Quais são as opções de entrega disponíveis?</span><br><br>
            <span class = 'texto'>• Oferecemos entrega local com taxa fixa dentro de nossa área de serviço. Além disso, disponibilizamos opções para retirada na loja ou combinação de entrega direta entre vendedor e cliente.</span><br><br>
            
            <span class = 'subtitulo'>6 - Quais métodos de pagamento são aceitos?</span><br><br>
            <span class = 'texto'> Os métodos de pagamento são a combinar com o vendedor. Isso proporciona flexibilidade para adaptar-se às necessidades de ambos os lados da transação.</span><br><br>
            
            <span class = 'subtitulo'>7 - Como é garantida a segurança das transações?</span><br><br>
            <span class = 'texto'>• Implementamos rigorosas medidas de segurança para proteger as transações e garantir a conformidade com nossos termos de serviço.</span><br><br>
            
            </div>
            <a href="index.php">
            <button id="retorno" type="button">Retorne ao início</button>
            </a>
    </main>

    <?php get_footer() ?>
</body>
<script src="../../assets/js/script.js"></script>
</html>