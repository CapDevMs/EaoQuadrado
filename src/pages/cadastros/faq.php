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
<body>
    <header class="header">
        <nav class="navbar">
            <div class="navbar-logo">
                <a href="#">
                    <img src="../../assets/img/logo.png" class="logo" alt="Logo">
                </a>
            </div>
            <div class="search-bar">
                <input type="text" class="search-input" placeholder="O que você procura hoje?">
                <img src="../../assets/img/pesquisar.svg" class="search-logo" alt="Pesquisar">
            </div>
            <ul class="menu-opcoes">
                <li class="menu-opcoes-icons">
                    <a href="#">
                        <img src="../../assets/img/pessoa.svg" alt="Pessoa">
                    </a>
                </li>
                <li class="menu-opcoes-icons">
                    <a href="#">
                        <img src="../../assets/img/carrinho.svg" alt="Carrinho">
                    </a>
                </li>
                <li class="menu-opcoes-icons">
                    <a href="#">
                        <img src="../../assets/img/informacao.svg" alt="Informações">
                    </a>
                </li>
                <li class="menu-opcoes-icons">
                    <a href="#">
                        <img src="../../assets/img/suporte.svg" alt="suporte">
                    </a>
                </li>
            </ul>
        </nav>
    </header>

    <main>
        <div id="menu">FAQ</div>
        <div id="sub-menu">FAQ</div>
        <div id="texto">Perguntas Frequentes sobre o nosso E-commerce <br> <br>

            1 - Como faço para vender no site? <br> <br> 
            • Para começar a vender, você precisa se cadastrar e passar por uma avaliação inicial. Novos vendedores são submetidos a uma avaliação durante suas primeiras vendas antes de se tornarem permanentes na plataforma.<br><br>
            
            2 - Como funciona o processo de compra?<br><br>
            • Todas as compras são intermediadas pelo nosso site. Após a confirmação do pedido ocorre direcionamento para cliente falar com vendedor e combinar entrega, após recebido o pedido o cliente podera avaliar sua compra.<br><br>
            
            3 - Como os vendedores adicionam produtos ao site?<br><br>
            • Os vendedores têm acesso para listar e gerenciar seus produtos diretamente no site. Nosso sistema facilita a comunicação entre vendedores e clientes durante todo o processo de venda.<br><br>
            
            4 - Existe um sistema de avaliações para os vendedores?<br><br>
            • Sim, temos um sistema de avaliação onde os clientes podem avaliar os vendedores. Todas as avaliações são moderadas para garantir a qualidade dos serviços prestados.<br><br>
            
            5 - Quais são as opções de entrega disponíveis?<br><br>
            • Oferecemos entrega local com taxa fixa dentro de nossa área de serviço. Além disso, disponibilizamos opções para retirada na loja ou combinação de entrega direta entre vendedor e cliente.<br><br>
            
            6 - Quais métodos de pagamento são aceitos?<br><br>
            • Os métodos de pagamento são a combinar com o vendedor. Isso proporciona flexibilidade para adaptar-se às necessidades de ambos os lados da transação.<br><br>
            
            7 - Como é garantida a segurança das transações?<br><br>
            • Implementamos rigorosas medidas de segurança para proteger as transações e garantir a conformidade com nossos termos de serviço.<br><br>
            
            </div>

            <button id="retorno" type="button">Retorne ao início</button>
    </main>

    <footer>
        <div class="footer-links">
            <div class="lista">
                <div class="footer-links-title">
                    <p>Suporte</p>
                </div>
                <div>
                    <ul class="footer-links-list">
                        <li class="footer-links-item">
                            <a href="#" class="footer-links-link">Senac Hub Academy</a>
                        </li>
                        <li class="footer-links-item">
                            <a href="#" class="footer-links-link">eaoquadado@gmail.com</a>
                        </li>
                        <li class="footer-links-item">
                            <a href="#" class="footer-links-link">+55 67 99999-9999</a>
                        </li>
                        <li class="footer-links-item">
                            <a href="#" class="footer-links-link">R. do Parque, 75 - Centro Campo Grande - MS</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="lista">
                <div class="footer-links-title">
                    <p>Conta</p>
                </div>
                <div>
                    <ul class="footer-links-list">
                        <li class="footer-links-item">
                            <a href="#" class="footer-links-link">Minha Conta</a>
                        </li>
                        <li class="footer-links-item">
                            <a href="#" class="footer-links-link">Entre/Cadastre</a>
                        </li>
                        <li class="footer-links-item">
                            <a href="#" class="footer-links-link">Carrinho</a>
                        </li>
                        <li class="footer-links-item">
                            <a href="#" class="footer-links-link">Lista de Desejos</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="lista">
                <div class="footer-links-title">
                    <p>Acesso</p>
                </div>
                <div>
                    <ul class="footer-links-list">
                        <li class="footer-links-item">
                            <a href="#" class="footer-links-link">Nossa Política</a>
                        </li>
                        <li class="footer-links-item">
                            <a href="#" class="footer-links-link">Termos de Uso</a>
                        </li>
                        <li class="footer-links-item">
                            <a href="#" class="footer-links-link">FAQ</a>
                        </li>
                        <li class="footer-links-item">
                            <a href="#" class="footer-links-link">Contato</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <script src="assets/js/script.js"></script>
</body>
</html>
