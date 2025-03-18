<?php 
    include ('../../config/funcoes.php');
    $appName = get_app_name();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="../../../assets/css/base.css"></script>
        <script src="../../../assets/css/cliente/meu_perfil_cliente.css"></script>
        <?php get_css(['base','style','cliente/meu_perfil_cliente'])?>
        <title>Eao Quadrado</title>
    </head>
<body>
    <?php get_header() ?>

    <main>
        <div class="roadmap">Home / Minha Conta</div>
        <div class="bemvindo"> Bem-vindo, John Doe!</div>
        <div class="register_client">
                <p>Edite seu Perfil</p>
                <img src="../../assets/img/foto_cliente.png" alt="foto do cliente">

                <div class="names-container">
                    <h2>Nome</h2>
                    <input type="text" name="Nome" class="input1-container" placeholder="John" required>
                    <h2>Sobrenome</h2>
                    <input type="text" name="Sobrenome" class="input1-container" placeholder="Doe" required>
                </div>

            <h2 class="subtitle">Data de Nascimento</h2>
            <div class="date-container">
                <div class="counter">
                    <input type="date" class="dia-mes" max="31" value="1" required></input>
                </div>

            </div>

            <div class="inform1-container">
                <h2>CPF</h2>
                <input type="text" name="cpf" class="input2-container" placeholder="000.000.000-00" required>
                <h2>E-mail</h2>
                <input type="text" name="email" class="input2-container" placeholder="johndoe@gmail.com" required>
                <h2>Número de Celular</h2>
                <input type="text" name="telefone" class="input2-container" placeholder="(67) 99999-9999" required>
            </div>

            <div class="inform2-container">
                <h2>Número de Telefone</h2>
                <input type="text" name="telefone" class="input2-container" placeholder="(67) 93333-9999" required>
                <h2>CEP</h2>
                <input type="text" name="cep" class="input3-container" placeholder="7900000" required>
                <h2>Endereço</h2>
                <input type="text" name="endereco" class="input3-container" placeholder="R.cebolinha" required>
                <h2>Bairro</h2>
                <input type="text" name="rua" class="input3-container" placeholder="Pioneiro" required>
                <h2>Complemento (opcional)</h2>
                <input type="text" name="Complemento" class="input3-container" placeholder="">
            </div>

            <div class="password-container">
                <h2 id="h2-senha">Senha</h2>
                <input type="text" class="input1-container" placeholder="*********" required>
                <div class = 'opcoes-conta'>                       
                    <a href='' id = "alterar-senha">Alterar senha?</a>
                    <a href='' id = "excluir-conta" >Excluir conta</a>
                </div>

                <div class="buttons-container">                    
                <button class="button-confirm">Salvar mudanças</button>
            </div>


            </div>

            </div>
    
    </main>


    <?php get_footer() ?>
</body>
<script src="assets/js/script.js"></script>
</html>