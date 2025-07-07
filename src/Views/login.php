<?php
    $appName = get_app_name();
    $base_url = get_base_url();
    $titulo = 'Login';

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php get_css(['base', 'style', 'login']) ?>
    <title><?= $appName; ?> - Login</title>
</head>
<body>
    <?php get_header() ?>
    <main>
        <div class="container">
                <?php if (isset($error)): ?>
                    <div class="row">
                        <div class="alert pb-2" role="alert">
                            <?= $error; ?>
                        </div>
                    </div>
                <?php endif; ?>
            <div class="row pt-2 m-auto">
                <div class="col-sm-hidden col-md-6">
                    <img class="img" src="<?=$base_url;?>assets/img/foto_tela_login tras.png">
                </div>
                <div class="col-sm-12 col-md-6">
                    <h1 class="titulo">Entre no E².com</h1>
                    <p class="subtitulo">Coloque suas credenciais abaixo:</p>
                
                    <form method="post" class="form" action="">
                        <div class="row">
                            <input class="form-input" type="email" name="login" placeholder="johndoe@gmail.com">
                            <input class="form-input" type="password" name="senha" placeholder="********">
                        </div>
                        <div class="row">
                            <a class="esqueceu-senha" href="<?=$base_url;?>esqueciSenha">Esqueceu sua senha?</a>
                        </div>
    
                        <div class="row">
                            <div class="col-sm-6">
                                <button class="btn button">Entrar</button>
                            </div>
                            <div class="col-sm-6">
                                <a class="btn button" id="abrirModal">Cadastrar</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div id="modalCadastrar" class="modal">
            <div class="modal-conteudo">
                <span class="fechar">&times;</span>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 mb-3">
                            <h2>Qual o tipo de cadastro deseja?</h2>
                        </div>
                        <div class="col-sm-6">
                            <a href="<?= $base_url; ?>cadastroCliente" class="btn button">Cliente</a>
                        </div>
                        <div class="col-sm-6">
                            <a href="<?= $base_url; ?>cadastro-vendedor" class="btn button">Vendedor</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php get_footer() ?>
</body>
<script src="<?=$base_url;?>assets/js/script.js"></script>
<script src="<?=$base_url;?>assets/js/login.js"></script>
</html>