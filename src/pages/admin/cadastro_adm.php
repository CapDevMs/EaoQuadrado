<?php
require_once('../../config/funcoes.php');
require('../../config/conexao.php');

?>
<?php get_base_head(); ?>
<!DOCTYPE html>
<html lang="pt-BR">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<body>
    <?php get_header(); ?>
    <link rel = 'stylesheet' href="../../assets/css/cadastro_adm.css">
    <title>Eao Quadrado</title>
</head>
    <main>
    <div class="roadmap">Home / Painel do Administrador / Cadastrar Novo Administrador</div>
        <div class="container-geral">
            <div class="menu-container">
                <h1>Cadastro</h1>
                <a src="#" id="pagina_atual">Cadastrar Novo Administrador</a>
                <a src="#">Gerenciar Meu Perfil</a>
                <h1>Colaboradores</h1>
                <a src="#">Validar Novo Colaborador</a>
                <a src="#">Colaboradores Aprovados</a>
                <a src="#">Colaboradores Reprovados</a>
                <a src="#">Listar Colaboradores Ativos</a>
                <a src="#">Suporte ao Colaborador</a>
                <h1>Clientes</h1>
                <a src="#">Suporte ao Cliente</a>
                <h1>Sistema</h1>
                <a src="#">Abrir Chamado</a>
                <a src="#">Criar Categoria</a>
                <a src="#">Editar Sistema</a>
            </div>
            
            <div class="register_client">
                    <p>Cadastro de Administrador</p>
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
                    <h2>Número de Telefone</h2>
                    <input type="text" name="telefone" class="input2-container" placeholder="(67) 99999-9999" required>
                </div>


               <div class="terms-container">
                    <h1>Permissões:</h1>
                    <div class="checkbox-container">
                        <input type="checkbox" name="termos" class="checkbox" id="confirmCheckbox" required>
                        <label for="confirm_termos">Validar Novas Contas de Vendedores</label>
                    </div>
                    <div class="checkbox-container">
                        <input type="checkbox" name="politicas" class="checkbox" id="confirmCheckbox" required>
                        <label for="confirm_politica">Suporte ao Cliente</label>
                    </div>
                    <div class="checkbox-container">
                        <input type="checkbox" name="politicas" class="checkbox" id="confirmCheckbox" required>
                        <label for="confirm_politica">Suporte ao Vendedor</label>
                    </div>
                    <div class="checkbox-container">
                        <input type="checkbox" name="politicas" class="checkbox" id="confirmCheckbox" required>
                        <label for="confirm_politica">Desativar Vendedor</label>
                    </div>
                    <div class="checkbox-container">
                        <input type="checkbox" name="politicas" class="checkbox" id="confirmCheckbox" required>
                        <label for="confirm_politica">Criar Anúncio</label>
                    </div>
                    <div class="checkbox-container">
                        <input type="checkbox" name="politicas" class="checkbox" id="confirmCheckbox" required>
                        <label for="confirm_politica">Criar Categoria</label>
                    </div>
                </div>


                <div class="password-container">
                    <h2>Senha</h2>
                    <input type="text" class="input3-container" placeholder="*********" required>
                    <h2>Confirmar Senha</h2>
                    <input type="text" class="input3-container" placeholder="*********" required>
                </div>

 
                
            </div>
        </div>
                <button class="button-confirm">Registrar</button>
    </main>

    <?php get_footer()?>    
</body>
<script src="assets/js/script.js"></script>
</html>