<?php
    include('../config/funcoes.php');
    $appName = get_app_name();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php get_css(['base', 'style', 'login']) ?>
    <title>Eao Quadrado</title>
</head>
<body>
    <?php get_header() ?>
    <main>
        <div class="container grid">
            <div>
                <img id="foto_tela_login" src="../assets/img/foto_tela_login tras.png" style="max-width: 100v;">
            </div>
            <div>
                <div id="caixa">
                    <h1 id="titulo">Entre no E².com</h1>
                    <h3>coloque suas credenciais abaixo:</h3>
                    <form action="">
                        <input id="email" type="email" placeholder="johndoe@gmail.com"><br>
                        <input id="senha" type="password" placeholder="********"><br>
                    </form>
                    <label for="senha">Esqueceu sua senha?</label><br>

                    <button class="button">Entrar</button>
                    <button class="button">Cadastrar</button>
                </div>
            </div>
        </div>
    </main>

    <?php get_footer() ?>
</body>
<script src="assets/js/script.js"></script>
</html>