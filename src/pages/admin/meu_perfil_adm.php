<?php
    include('../../config/funcoes.php');
    $appName = get_app_name();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Perfil</title>
    <?php get_css(['admin/meu_perfil_adm']) ?>
    <?php get_css_components() ?>
</head>
<body>
    <?php get_header(); ?>
    <main>
        <div class="frame">
            <div class="tittle-pag">
                <h4>Edite seu Perfil</h4>
            </div>
            <div class="edit-perfil">
                <img id="edit-photo" src="../../assets/img/edit-perfil-icon.png">
                    <a href="#">
                        <img class="but-photo" src="../../assets/img/Camera.png">
                    </a>
                        <h5>Nome</h5>
                        <br>
                            <input type="text" class="input-text" placeholder="  ...">
                        <h5>Sobrenome</h5>
                        <br>
                            <input type="text" class="input-text" placeholder="  ...">
                        <h5>Data de Nascimento</h5>
                        <br>
                            <input type="date" class="input-date">
                        <h5>CPF</h5>
                        <br>
                            <input type="text" class="input-text" maxlength="11" placeholder="  000.000.000-00">
                        <h5>Email</h5>
                        <br>
                            <input type="text" class="input-text" placeholder="  ...">
            </div>
        </div>

        <div class="edit-perfil2">
            <h5>CEP</h5>
            <br>
                <input type="text" class="input-text" maxlength="8" placeholder="  ...">
            <h5>Endereço</h5>
            <br>
                <input type="text" class="input-text" placeholder="  ...">
            <h5>Bairro</h5>
            <br>
                <input type="text" class="input-text" placeholder="  ...">
            <h5>Complemento(Opcional)</h5>
            <br>
                <input type="text" class="input-text" placeholder="  ...">
            <h5>Senha</h5>
            <br>
                <input type="password" class="input-text" placeholder="  ...">
            <br>
                <a href="#" class="alt-senha">Alterar senha</a>
            <br>
            <button class="but-salvar">Salvar</button>
        </div>
    </main>
    
    <!-- <?php get_footer(); ?>     -->
    
</body>
<!-- <script type="module" src="../assets/js/produto.js?<?= time() ?>"></script> -->
</html>