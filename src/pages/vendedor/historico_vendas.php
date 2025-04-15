<?php
    include(__DIR__ . '/../../config/funcoes.php');
    $appName = get_app_name();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $appName . ' - ' . $titulo ?? '' ?></title>
    <?php get_css(['base', 'style', 'historico_vendas']) ?>
</head>

<body>
    <?php get_header() ?>

    <main>
        <div class="col-sm-3">
            <? get_sidebar_vendedor('historico_vendas'); ?>
        </div>

        <div class="container col-sm-12 col-md-9">
            <div class="row">
            <h1>Histórico de Vendas</h1>
            <!-- Cabecalho da Tabela!! -->
        <div class="cabecalho">
            <div class="cabecalho-item">Produto</div>
            <div class="cabecalho-item">Status do pedido</div>
            <div class="cabecalho-item">Preço</div>
            <div class="cabecalho-item">Cliente</div>
            <div class="cabecalho-item">Data</div>
            <div class="cabecalho-item">Quantidade</div>
        </div>

        <!-- CARDS DA TABELA -->
        <div class="card" onclick="toggleDetails(this)">
            <div class="cardItems cardItems-inicio"  >
                <img class="img-historico" 
                    src="<?= get_base_url(); ?>/assets/img/lcdMonitor.png" alt="Monitor">
                <p class="p-50">LCD Monitor</p>
            </div>
            <div class="cardItems"  >
                <p class="p-40">Entregue</p>
            </div>
            <div class="cardItems" >
                <p class="p-30">R$ 999,99</p>
            </div>
            <div class="cardItems" >
                <p class="p-20">Yuri Ferreira</p>
            </div>
            <div class="cardItems" >
                <p class="p-data">22/01/2025</p>
            </div>
            <div class="cardItems" >
                <p class="p-10">1</p>
            </div>
            <div class="card-details">
                <div class="elementCard">
                <p class="clienteP">Cliente: <span class="nomeP">Yuri Ferreira</span> </p>
                <p class="clienteP">Endereço: <span class="nomeP"> Rua Piratininga ,629, Jardim dos Estados Campo Grande MS</span> </p>
                <p class="clienteP">Data: <span class="nomeP">12 de janeiro</span></p>
                <p class="clienteP">CEP: <span class="nomeP">79020-240</span></p>
                </div> 

                <label for="statusPedido">Status de Pedido</label>
                        <select id="statusPedido" name="statusPedido">
                            <option value="entregue">Entregue</option>
                            <option value="opcao2">Troca</option>
                            <option value="opcao3">Cancelamento</option>
                        </select>
                <span class="clienteP">12 de dezembro 2024</span>
                </div>
                
        </div>
        <div class="card" onclick="toggleDetails(this)">
            <div class="cardItems cardItems-inicio">
                <img class="img-historico" 
                    src="<?= get_base_url(); ?>/assets/img/controleUsb.png" alt="Controle Usb">
                <p class="p-50">Controle Usb</p>
            </div>
            <div class="cardItems" >
                <p class="p-40">Em Andamento</p>
            </div>
            <div class="cardItems" >
                <p class="p-30">R$ 999,99</p>
            </div>
            <div class="cardItems" >
                <p class="p-20">Paulo Morais</p>
            </div>
            <div class="cardItems" >
                <p class="p-data">22/01/2025</p>
            </div>
            <div class="cardItems" >
                <p class="p-10">1</p>
            </div>

        </div>
        <div class="card"  onclick="toggleDetails(this)">
            <div class="cardItems cardItems-inicio">
                <img class="img-historico" 
                    src="<?= get_base_url(); ?>/assets/img/ps5Controle.png" alt="PS5 Controle">
                <p class="p-50">PS5 Controle</p>
            </div>
            <div class="cardItems">
                <p class="p-40">Cancelado</p>
            </div>
            <div class="cardItems">
                <p class="p-30">R$ 499,99</p>
            </div>
            <div class="cardItems">
                <p class="p-20">Monique Silva</p>
            </div>
            <div class="cardItems">
                <p class="p-data">22/01/2025</p>
            </div>
            <div class="cardItems">
                <p class="p-10">1</p>
            </div>

        </div>
        <div class="card"  onclick="toggleDetails(this)">
            <div class="cardItems cardItems-inicio">
                <img class="img-historico" 
                    src="<?= get_base_url(); ?>/assets/img/iphone14.png" alt="Iphone 14">
                <p class="p-50">Iphone 14</p>
            </div>
            <div class="cardItems">
                <p class="p-40">Entregue</p>
            </div>
            <div class="cardItems">
                <p class="p-30">R$ 3.999</p>
            </div>
            <div class="cardItems">
                <p class="p-20">Andrey Gomes</p>
            </div>
            <div class="cardItems" >
                <p class="p-data">22/01/2025</p>
            </div>
            <div class="cardItems">
                <p class="p-10">1</p>
            </div>
        </div>
        <div class="card"  onclick="toggleDetails(this)">
            <div class="cardItems cardItems-inicio">
                <img class="img-historico" 
                    src="<?= get_base_url(); ?>/assets/img/coolerRgb.png" alt="Cooler Rgb">
                <p class="p-50">Cooler RGB</p>
            </div>
            <div class="cardItems">
                <p class="p-40">Entrgue</p>
            </div>
            <div class="cardItems">
                <p class="p-30">R$ 299,00</p>
            </div>
            <div class="cardItems">
                <p class="p-20">Ana Clara</p>
            </div>
            <div class="cardItems" >
                <p class="p-data">22/01/2025</p>
            </div>
            <div class="cardItems">
                <p class="p-10">1</p>
            </div>
        </div>
        
        <div class="card"  onclick="toggleDetails(this)">
            <div class="cardItems cardItems-inicio">
                <img class="img-historico" 
                    src="<?= get_base_url(); ?>/assets/img/lapisFCastell.png" alt="Lapis FCastell">
                <p class="p-50">Lápis de cor Faber Castell</p>
            </div>
            <div class="cardItems">
                <p class="p-40">Em Andamento</p>
            </div>
            <div class="cardItems">
                <p class="p-30">R$ 18,90</p>
            </div>
            <div class="cardItems">
                <p class="p-20">Elias Silva</p>
            </div>
            <div class="cardItems" >
                <p class="p-data">22/01/2025</p>
            </div>
            <div class="cardItems">
                <p class="p-10">1</p>
            </div>
        </div>
            </div>
        </div>
    </main>
    <?php get_footer() ?>
</body>
<script src="<?= get_base_url(); ?>/assets/js/script.js"></script>
<script src="<?= get_base_url(); ?>/assets/js/historico_vendas.js"></script>
</html>