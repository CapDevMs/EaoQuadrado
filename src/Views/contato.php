<?php
$appName = get_app_name();
$titulo = 'Contato';
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $appName . ' - ' . $titulo ?? '' ?></title>
    <?php get_css(['cadastros/contato']) ?>
</head>

<body>
    <?php get_header() ?>
    <?php get_breadcrumbs() ?>

    <main>
        <div class="row">
            <div class="container">
                <div class="col-sm-12">
                    <?php
                    // função para adicionar caminho no roadmap (primeiro caminho + segundo nome que irá ficar no roadmap)
                    breadcrumb(array(get_base_url() => 'Home', get_base_url() . '/contato' => 'Contato'));
                    ?>
                </div>
            </div>
        </div>
        <div class="container">
            <?php if (isset($error)): ?>
                <div class="row">
                    <div class="alert pb-2" role="alert">
                        <?= $error; ?>
                    </div>
                </div>
            <?php endif; ?>

            <?php if (isset($mensagem)): ?>
                <div class="row">
                    <div class="success pb-2" role="success">
                        <?= $mensagem; ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
        <div class="row">
            <div class="container">
                <div class="col-sm-12 col-md-4 col-xl-3 pb-3">
                    <div class="contatos-group">
                        <div class="contatos-title pb-1">
                            <span class="round"></span>
                            <h1>Entre em Contato</h1>
                        </div>
                        <p class="pb-1">Atendimento 24 horas</p>
                        <p class="pb-1">Telefone: +67991377273</p>
                    </div>
                    <hr>
                    <div class="contatos-group">
                        <div class="contatos-title pb-1 pt-1">
                            <span class="round"></span>
                            <h1>Mande um Email</h1>
                        </div>
                        <p class="pb-1">Respondemos e-mail em 24 horas</p>
                        <p class="pb-1">Email: customer@exclusive.com</p>
                        <p>Email: support@exclusive.com</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-8 col-xl-9 pb-3">
                    <form action="/contato" class="form" method="post" id="form-contato">
                        <div class="row pb-1">
                            <div class="col-sm-12 col-md-4 pb-1">
                                <label class="required" for="nome">Nome</label>
                                <input class="input"  placeholder="John Doe" id="nome" name="nome"></input>

                            </div>
                            <div class="col-sm-12 col-md-4 pb-1">
                                <label class="required" for="email">E-mail</label>
                                <input class="input" type="email"  id="email" name="email" placeholder="johndoe@gmail.com"></input>
                            </div>
                            <div class="col-sm-12 col-md-4 pb-1">
                                <label class="required" for="telefone">Telefone/WhatsApp</label>
                                <input class="input"  id="telefone" name="telefone" placeholder="(67) 99999-9999"></input>
                            </div>
                        </div>

                        <div class="row pb-1">
                            <div class="col-sm-12">
                                <label class="required" for="descricao">Mensagem</label>
                                <textarea class="input-textarea" id="descricao" name="descricao" placeholder="Sua mensagem" rows="15" ></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <button id="salvar" class="btn" type="submit">Enviar Mensagem</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>


    </main>

    <?php get_footer() ?>
</body>
<script src="<?= get_base_url(); ?>/assets/js/script.js"></script>
<script src="<?= get_base_url(); ?>/assets/js/contato.js"></script>

</html>