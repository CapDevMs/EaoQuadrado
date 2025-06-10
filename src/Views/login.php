<?php
    $appName = get_app_name();
    $baseUrl = get_base_url();
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
                    <img class="img" src="../assets/img/foto_tela_login tras.png">
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
                            <a class="esqueceu-senha" href="<?= $baseUrl; ?>esqueci-senha">Esqueceu sua senha?</a>
                        </div>
    
                        <div class="row">
                            <div class="col-sm-6">
                                <button class="btn button">Entrar</button>
                            </div>
                            <div class="col-sm-6">
                                <a class="btn button" href="<?= $baseUrl; ?>cadastros/cadastro_cliente">Cadastrar</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <?php get_footer() ?>
</body>
<script src="assets/js/script.js"></script>
</html>