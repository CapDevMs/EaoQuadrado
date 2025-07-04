<?php
$appName = get_app_name();
$baseUrl = get_base_url();
$titulo = 'Página do Vendedor';
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="<?= get_base_url(); ?>assets/img/logo.png">
  <?php get_css(['cliente/pagina_vendedor','vendedor/pagina_do_vendedor']) ?>
  <?php get_css_components(); ?>

  <title>E ao Quadrado</title>
</head>

<body>
  <?php get_header() ?>

  <main class="container">
    <section class="col-sm-12">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 pb-3">
            <img src="<?= get_base_url(); ?>assets/img/Banner_loja.png" class="img banner_loja" alt="Banner da Loja">
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12 pb-4">
            <banner_vendedor class="card">
            </banner_vendedor>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-12">
            <div class="content-header-section">
              <div class="block-green"></div>
              <p class="text-primary">Nossos Produtos</p>
            </div>
          </div>
        </div>
        <card-produto class="row"></card-produto>
      </div>
      <div class="container-comentarios">
        <container-comentarios>
        </container-comentarios>
      </div>
    </section>
  </main>

  <script type="module" src="<?= get_base_url(); ?>assets/js/vendedor/pagina_do_vendedor.js"></script>
  <?php get_footer() ?>
</body>

</html>