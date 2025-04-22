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
      <div class="cabecalho">
        <div class="cabecalho-item">Produto</div>
        <div class="cabecalho-item">Status do pedido</div>
        <div class="cabecalho-item">Preço</div>
        <div class="cabecalho-item">Cliente</div>
        <div class="cabecalho-item">Data</div>
        <div class="cabecalho-item">Quantidade</div>
      </div>

      <div class="container-historico">
        <containerPedidos></containerPedidos>
      </div>

    </div>
  </main>
  <?php get_footer() ?>
</body>
<script type="module" src="<?= get_base_url(); ?>/assets/js/vendedor/historico_vendas.js"></script>
<script type="module" src="<?= get_base_url(); ?>/assets/js/script.js"></script>

</html>