<?php 
    include('../config/funcoes.php');
    $appName = get_app_name();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../assets/css/style.css">
        <link rel="stylesheet" href="../assets/css/base.css">
        <link rel="stylesheet" href="../assets/css/cliente/meu_perfil_cliente.css">
        <title>Eao Quadrado</title>
    </head>
<body>
    <?php get_header() ?>

    <main>
        <div class="roadmap">Home / Minha Conta</div>
        <div class="container">
            <aside class="sidebar">
                <ul class="sidebar-menu">
                    <li><a href="#" class="active">Gerenciar Minha Conta</a></li>
                    <li><a href="#">Meus Pedidos</a></li>
                    <li><a href="#">Histórico de Pedidos</a></li>
                </ul>
            </aside>
            <div class="profile-section">
                <h1>Edite Seu Perfil</h1>
                <div class="profile-avatar">
                    <img src="../assets/img/foto_cliente.png" alt="Foto do Perfil" class="avatar">
                </div>
                <form class="profile-form">
                    <div class="form-group">
                        <label>CEP</label>
                        <input type="text" name="cep" value="7900000" required>
                    </div>
                    <div class="form-group">
                        <label>Endereço</label>
                        <input type="text" name="endereco" value="R. Cebolinha" required>
                    </div>
                    <div class="form-group">
                        <label>Bairro</label>
                        <input type="text" name="bairro" value="Pioneiro" required>
                    </div>
                    <div class="form-group">
                        <label>Complemento (opcional)</label>
                        <input type="text" name="complemento" value="">
                    </div>
                    <div class="form-group">
                        <label>Senha</label>
                        <input type="password" name="senha" value="*********" required>
                    </div>
                    <div class="form-group">
                        <a href="#" class="change-password">Alterar Senha?</a>
                    </div>
                    <div class="form-actions">
                        <button type="button" class="delete-account">Excluir conta</button>
                        <button type="submit" class="save-changes">Salvar Mudanças</button>
                    </div>
                </form>
            </div>
            <div class="welcome-message">
                <p>Bem-vindo, John Doe!</p>
            </div>
        </div>
    </main>

    <?php get_footer() ?>
</body>
<script src="assets/js/script.js"></script>
</html>