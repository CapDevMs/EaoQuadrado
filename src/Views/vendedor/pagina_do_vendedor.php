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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
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
            <div class="card position-relative"><!-- necessário para que o ícone seja posicionado em relação ao card -->
              <div class="card-body ptb-2">
                <div class="row align-items-center">
                  <!-- Avatar -->
                  <div class="col-2 text-center">
                    <div class="avatar">
                      <img src="../assets/img/cliente/studio_center.svg" alt="imagem loja" class="figure-img img-fluid">
                    </div>
                  </div>

          <!-- Informações da loja -->
                  <div class="col-7">
                    <h2>${titulo}</h2>
                    <a href="mailto:studiocenterpy@gmail.com">${email}</a>
                    <p>${endereco}</p>
                    <p>Campo Grande - MS</p>
                  </div>

                  <!-- Avaliações e WhatsApp -->
                  <div class="col-3 text-right">
                    <p class="mr-1">Avaliações: </p>
                    <p class="card_estrela_texto estrela_35">★★★★★</p>
                    <img class="whatsapp" src="../assets/img/icons/whatsapp.svg" alt="">
                    <a target="_blank" href="https://wa.me/556734377000">${telefone}</a>
                  </div>
                </div>
              </div>

              <!-- Ícone de coração no canto inferior direito -->
                <div class="position-icone-favoritar mb-2 pr-2">
                  <i class="fa-regular fa-heart icone-favoritar" alt="Favoritar" aria-hidden="true"></i>
                </div>
              </div>
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