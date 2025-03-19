<?php
require_once('../config/funcoes.php');
require('../config/conexao.php');
?>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

<?php get_base_head(); ?>

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
<link rel="stylesheet" href="../assets/css/style.css">
<link rel="stylesheet" href="../assets/css/base.css">
<link rel="stylesheet" href="../assets/css/login.css">
</html>