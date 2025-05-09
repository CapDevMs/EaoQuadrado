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
  <?php get_css(['base', 'style', '/vendedor/historico_vendas']) ?>
</head>

<body>
  <?php get_header() ?>

  <main>
    <div class="container-info col-sm-12">
      <asside class="col-l-3 col-md-hidden col-sm-hidden">
        <?php get_sidebar_vendedor('historico_vendas'); ?>
      </asside>

      <div class="container-historico-vendas col-sm-12 col-md-12">
        <h1>Histórico de Vendas</h1>
        <div class="infos-historico">
          <div class="item-info-historico item-info-historico-inicio">Produto</div>
          <div class="item-info-historico">Status </div>
          <div class="item-info-historico">Preço</div>
          <div class="item-info-historico">Cliente</div>
          <div class="item-info-historico">Data</div>
          <div class="item-info-historico">Quantidade</div>
        </div>

        <div class="container-historico">
          <containerPedidos></containerPedidos>
        </div>
      </div>
    </div>
  </main>
  <?php get_footer() ?>
</body>
<script type="module" src="<?= get_base_url(); ?>/assets/js/vendedor/historico_vendas.js"></script>
<script type="module" src="<?= get_base_url(); ?>/assets/js/script.js"></script>

</html>