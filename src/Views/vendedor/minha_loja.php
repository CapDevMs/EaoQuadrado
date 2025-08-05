<?php
$appName = get_app_name();
$baseUrl = get_base_url();
$titulo = 'Minha Loja';
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $appName . ' - ' . $titulo ?? '' ?></title>
    <?php get_css(['sidebar', 'vendedor/minha_loja']) ?>
</head>

<body>
    <?php get_header() ?>

    <main>
        <div class="container">
            <div class="row">
                <asside class="col-md-3 col-sm-hidden">

                    <?php get_sidebar_vendedor('minha_loja'); ?>

                </asside>

                <section class="col-md-9 col-sm-12">
                    <div class="container">
                        <h1 class="title pb-5">Edite Sua Loja</h1>

                        <?php if ($vendedor['banner_loja'] ?? false) : ?>
                            <div class="row">
                                <div class="col-12 pb-3">
                                    <img src="<?= $baseUrl . $vendedor['banner_loja'] ?>" class="img"
                                        alt="Banner da Loja">
                                </div>
                            </div>
                        <?php endif; ?>

                        <form class="form" method="post" enctype="multipart/form-data" action="<?= route('vendedor.saveMinhaLoja'); ?>">
                            <div class="row">
                                <div class="col-sm-12 pb-3">
                                    <label>Banner da Loja</label>
                                    <input type="file" name="banner_loja" class="input-file"
                                        accept="image/*">
                                    <small class="text-muted">Tamanho recomendado: 1200x300px</small>
                                </div>
                                <div class="col-md-6 col-sm-12 pb-1">
                                    <label>Nome da Loja</label>
                                    <input name="nome_loja" class="input" type="text" value="<?= $vendedor['nome_loja'] ?? '' ?>">
                                </div>
                                <div class="col-md-6 col-sm-12 pb-1">
                                    <label>Telefone</label>
                                    <input name="telefone_loja" class="input" type="text" value="<?= $vendedor['telefone_loja'] ?? '' ?>">
                                </div>

                                <div class="col-md-6 col-sm-12 pb-1">
                                    <label>E-mail</label>
                                    <input name="email_loja" class="input" type="email" value="<?= $vendedor['email_loja'] ?? '' ?>">
                                </div>
                                <div class="col-md-6 col-sm-12 pb-1">
                                    <label>Endereço</label>
                                    <input name="endereco_loja" class="input" type="text" value="<?= $vendedor['endereco_loja'] ?? '' ?>">
                                </div>

                                <div class="col-md-6 col-sm-12 pb-1">
                                    <label>CEP</label>
                                    <input name="cep_loja" class="input" type="text" value="<?= $vendedor['cep_loja'] ?? '' ?>">
                                </div>
                                <div class="col-md-6 col-sm-12 pb-1">
                                    <label>Número</label>
                                    <input name="numero_endereco" class="input" type="text" value="<?= $vendedor['numero_endereco'] ?? '' ?>">
                                </div>

                                <div class="col-md-6 col-sm-12 pb-1">
                                    <div class="row">
                                        <div class="col-6 form-check">
                                            <label>
                                                <input class="form-check-input" type="radio" name="document" value="CPF"
                                                    <?= (isset($vendedor['cnpj']) && empty($vendedor['cnpj'])) ? '' : 'checked' ?>>
                                                CPF
                                            </label>
                                        </div>
                                        <div class="col-6 form-check">
                                            <label>
                                                <input type="radio" class="form-check-input" name="document" value="CNPJ"
                                                    <?= (isset($vendedor['cnpj']) && !empty($vendedor['cnpj'])) ? 'checked' : '' ?>>
                                                    CNPJ
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <input id="cpf_cnpj" name="" class="input" type="text" placeholder="00.000.000/0000-00"
                                                value="<?= isset($vendedor['cnpj']) ? $vendedor['cnpj'] : $vendedor['cpf'] ?? '' ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row pb-3 float-end">
                                <div class="col-3 col-sm-6">
                                    <button type="button" class="btn btn-cancel" onclick="voltarPagina()">Cancelar</button>
                                </div>
                                <div class="col-3 col-sm-6">
                                    <button class="btn btn-save">Salvar Mudanças</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </section>
            </div>
        </div>
    </main>

    <?php get_footer() ?>
</body>
<script src="<?php get_base_url(); ?>/assets/js/script.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const cpfCnpjInput = document.getElementById('cpf_cnpj');
        // altera o nome do input com id cpf_cnpj de cpf para cnpj conforme o radio selecionado
        const radioButtons = document.getElementsByName('document');
        radioButtons.forEach(radio => {
            radio.addEventListener('change', function() {
                if (this.value === 'CNPJ') {
                    cpfCnpjInput.name = 'cnpj';
                    cpfCnpjInput.placeholder = '00.000.000/0000-00';
                    cpfCnpjInput.value = '<?= $vendedor['cnpj'] ?? '' ?>';
                } else {
                    cpfCnpjInput.name = 'cpf';
                    cpfCnpjInput.placeholder = '000.000.000-00';
                    cpfCnpjInput.value = '<?= $vendedor['cpf'] ?? '' ?>';
                }
            });
        });
    });
</script>

</html>