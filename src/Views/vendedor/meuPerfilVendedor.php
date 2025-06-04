<?php
$appName = get_app_name();
$baseUrl = get_base_url();
$titulo = 'Histórico de Vendas';
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $appName . ' - ' . $titulo ?? '' ?></title>
  <?php get_css(['sidebar','base', 'style', 'vendedor/meu_perfil_vendedor']) ?>
</head>

<body>
  <?php get_header() ?>

  <main>
    <div class="container row col-sm-12">
      <asside class="col-sm-3">
        <!-- <?php get_sidebar_vendedor('historico_vendas'); ?> -->
      </asside>

    <section class="container row col-sm-9"> 
        <div class="container body-perfil col-sm-10 pl-1">
            <img src="src\public\assets\img\foto_cliente.png" alt="foto do cliente" class="client-image col-sm-12">
                
            <form class="form row" id="vendedor_form" action="#">
                <div class="input-group row col-sm-6 pb-2">
                    <label  class="col-sm-8" for="nome">Nome</label>
                    <input class="col-sm-8" type="text" id="nome" name="nome" placeholder="John" required>
                </div>

                <div class="input-group row col-sm-6 pb-2">
                    <label class="col-sm-8" for="cep">CEP</label>
                    <input class="col-sm-8" type="text" id="cep" name="cep" placeholder="John" required>
                </div>
                <div class="input-group row col-sm-6 pb-2">
                    <label class="col-sm-8" for="Sobrenome">Sobrenome</label>
                    <input class="col-sm-8" type="text" id="sobrenome" name="sobrenome" placeholder="John" required>
                </div>
                <div class="input-group row col-sm-6 pb-2">
                    <label class="col-sm-8" for="endereco">Endereço</label>
                    <input class="col-sm-8" type="text" id="endereco" name="endereco" placeholder="John" required>
                </div>
                <div class="input-group row col-sm-6 pb-2">
                    <label class="col-sm-8" for="nascimento">Data de Nascimento</label>
                    <input class="col-sm-8" type="date" id="nascimento" name="nascimento" required>
                </div>
                <div class="input-group row col-sm-6 pb-2">
                    <label class="col-sm-8" for="nome">Nome</label>
                    <input class="col-sm-8" type="text" id="nome" name="nome" placeholder="John" required>
                </div>
                <div class="input-group row col-sm-6 pb-2">
                    <label class="col-sm-8" for="nome">Nome</label>
                    <input class="col-sm-8" type="text" id="nome" name="nome" placeholder="John" required>
                </div>
                <div class="input-group row col-sm-6 pb-2">
                    <label class="col-sm-8" for="nome">Confirmar Senha</label>
                    <input class="col-sm-8" type="text" id="nome" name="nome" placeholder="John" required>
                </div>
                <button type="submit" class="button-confirm">Salvar Mudanças</button>
            </form>           
        </div>

    </section>
  <?php get_footer() ?>
</body>
<script type="module" src="<?= get_base_url(); ?>/assets/js/script.js"></script>

</html>