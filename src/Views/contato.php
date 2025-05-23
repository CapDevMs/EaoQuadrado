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
    <?php get_breadcrumbs()?>

    <main>
        <?php
        // função para adicionar caminho no roadmap (primeiro caminho + segundo nome que irá ficar no roadmap)
        breadcrumb(array('http://localhost/EaoQuadrado/src/' => 'Home', 'http://localhost/EaoQuadrado/src/pages/contato.php' => 'Contato'));
        ?>
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
        <div class="container pt-3 row">
            <div class="info col-sm-12 col-md-4 pt-1">
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


            <form action="" class="message col-sm-12 col-md-8" method="post">

                <div class="caixa-container row">

                    <div class="input-group col-md3 pb-2">
                        <div class="titulo">
                            <label for="nome">Nome</label>
                            <input class="caixa" placeholder="John Doe" id="nome" name="nome"></input>
                        </div>
                        <div class="titulo">
                            <label for="email">E-mail</label>
                            <input class="caixa" id="email" name="email" placeholder="johndoe@gmail.com"></input>
                        </div>
                        <div class="titulo">
                            <label for="telefone">Telefone/WhatsApp</label>
                            <input class="caixa" id="telefone" name="telefone" placeholder="(67) 99999-9999"></input>
                        </div>
                    </div>

                    <textarea class="caixa2" id="descricao" name="descricao" placeholder="Sua mensagem" rows="15" required></textarea>
                    <div class="button-container pt-1">
                        <button id="salvar" type="submit">Enviar Mensagem</button>
                    </div>
                </div>
            </form>
        </div>


    </main>

    <?php get_footer() ?>
</body>
<script src="<?= get_base_url(); ?>/assets/js/script.js"></script>

</html>