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
    <asside class="col-md-3 col-sm-hidden">
      <?php get_sidebar_vendedor('historico_vendas'); ?>
    </asside>

    <div class="container col-sm-12 col-md-9">
      <h1>Histórico de Vendas</h1>
      <!-- Cabecalho da Tabela -->
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
        <div class="cardItems cardItems-inicio">
          <img class="img-historico" src="<?= get_base_url(); ?>/assets/img/monitor_oled.png" alt="Monitor">
          <p class="p-50">LCD Monitor</p>
        </div>
        <div class="cardItems">
          <p class="p-40">Entregue</p>
        </div>
        <div class="cardItems">
          <p class="p-30">R$ 999,99</p>
        </div>
        <div class="cardItems">
          <p class="p-20">Yuri Ferreira</p>
        </div>
        <div class="cardItems">
          <p class="p-data">22/01/2025</p>
        </div>
        <div class="cardItems">
          <p class="p-10">1</p>
        </div>
        <div class="card-details">
          <div class="elementCard">
            <p class="clienteP">Cliente: <span class="nomeP">Yuri Ferreira</span> </p>
            <p class="clienteP">Endereço: <span class="nomeP"> Rua Piratininga ,629, Jardim dos Estados Campo Grande
                MS</span> </p>
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

      <cardHistoricoVendas></cardHistoricoVendas>

    </div>
  </main>
  <?php get_footer() ?>
</body>
<script type="module" src="<?= get_base_url(); ?>/assets/js/vendedor/historico_vendas.js"></script>
<script type="module" src="<?= get_base_url(); ?>/assets/js/script.js"></script>

</html>