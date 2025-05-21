<?php
$appName = get_app_name();
$titulo = 'Esqueci a senha';
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $appName . ' - ' . $titulo ?? '' ?></title>
    <?php get_css(['cadastros/esqueci_senha']) ?>
</head>

<body>
    <?php get_header() ?>
    <main>
        <div class="roadmap">
            <a href="index.php">Home</a>
            <p>/</p>
            <a href="esqueci_senha.php">Esqueci a senha</a>
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
        <div class="main_content">
            <div class="texto_forms">
                <h1>Esqueci a Senha</h1>
                <div class="info_container">
                    <p>Informe o Email cadastrado</p>
                    <div class="forms_container">
                        <form method="POST" class="forms">
                            <label for="email">Email</label>
                            <input type="text" name="login" id="email" placeholder="johndoe@gmail.com">
                            <button type="submit">Recuperar Senha</button>
                        </form>
                    </div>
                </div>
            </div>
            <img src="../../assets/img/esqueci-senha.svg" class="imagem">
        </div>
    </main>
    <?php get_footer() ?>
</body>
<script src="../../assets/js/script.js"></script>

</html>