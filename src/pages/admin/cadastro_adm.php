<?php 
    include('../config/funcoes.php');
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php get_css(['cadastro_adm', 'base', 'style']) ?>
    
    <title>Eao Quadrado</title>
</head>
<body>
    <header class="header">
    <?php get_header() ?>
    </header>
<main>

    <div class="roadmap">Home / Painel do Administrador / Cadastrar Novo Administrador</div>
            <div class="container-geral">
                <div class="menu-container">
                    <h1>Cadastro</h1>
                    <a href="#" id="pagina_atual">Cadastrar Novo Administrador</a>
                    <a href="#">Gerenciar Meu Perfil</a>
                    <h1>Colaboradores</h1>
                    <a href="#">Validar Novo Colaborador</a>
                    <a href="#">Colaboradores Aprovados</a>
                    <a href="#">Colaboradores Reprovados</a>
                    <a href="#">Listar Colaboradores Ativos</a>
                    <a href="#">Suporte ao Colaborador</a>
                    <h1>Clientes</h1>
                    <a href="#">Suporte ao Cliente</a>
                    <h1>Sistema</h1>
                    <a href="#">Abrir Chamado</a>
                    <a href="#">Criar Categoria</a>
                    <a href="#">Editar Sistema</a>
                </div>
            
                <form action="#">
                    <div class="register_client">
                        <h2>Cadastro de Administrador</h2>
                        <img src="../../assets/img/foto_cliente.png" alt="foto do cliente">
                        
                        <div class="container-inter">
                            <div class="inform-container">

                                <div class="nome-group">
                                    <label for="nome">Nome</label>
                                    <input type="text" name="Nome" id="nome" class="input1" placeholder="John" required>
                                </div>

                                <div class="sobrenome-group">
                                    <label for="sobrenome">Sobrenome</label>
                                    <input type="text" name="Sobrenome" id="sobrenome" class="input1" placeholder="Doe" required>
                                </div>

                                <div class="date-group">
                                    <label for="nascimento">Data de Nascimento</label>
                                    <input type="date" id="nascimento" name="nascimento" required>
                                </div>                            
                                
                                <div class="cpf-group">
                                    <label for="cpf">CPF</label>
                                    <input type="text" name="cpf" id="cpf" class="input1" placeholder="000.000.000-00" required>
                                </div>

                                <div class="email-group">
                                    <label for="email">E-mail</label>
                                    <input type="text" name="email" id="email" class="input1" placeholder="johndoe@gmail.com" required>
                                </div>

                                <div class="cell-group">
                                    <label for="telefone">Número de Telefone</label>
                                    <input type="text" name="telefone" id="telefone" class="input1" placeholder="(67) 99999-9999" required>
                                </div> 

                            </div>

                            
                            <div class="inform-container2">
                                <div class="terms-container">
                                    <h1>Permissões:</h1>
                                    <div class="checkbox-container">
                                        <input type="checkbox" name="termos" class="checkbox" id="confirmCheckbox1" required>
                                        <label for="confirmCheckbox1">Validar Novas Contas de Vendedores</label>
                                    </div>
                                    <div class="checkbox-container">
                                        <input type="checkbox" name="politicas" class="checkbox" id="confirmCheckbox2" required>
                                        <label for="confirmCheckbox2">Suporte ao Cliente</label>
                                    </div>
                                    <div class="checkbox-container">
                                        <input type="checkbox" name="politicas" class="checkbox" id="confirmCheckbox3" required>
                                        <label for="confirmCheckbox3">Suporte ao Vendedor</label>
                                    </div>
                                    <div class="checkbox-container">
                                        <input type="checkbox" name="politicas" class="checkbox" id="confirmCheckbox4" required>
                                        <label for="confirmCheckbox4">Desativar Vendedor</label>
                                    </div>
                                    <div class="checkbox-container">
                                        <input type="checkbox" name="politicas" class="checkbox" id="confirmCheckbox5" required>
                                        <label for="confirmCheckbox5">Criar Anúncio</label>
                                    </div>
                                    <div class="checkbox-container">
                                        <input type="checkbox" name="politicas" class="checkbox" id="confirmCheckbox6" required>
                                        <label for="confirmCheckbox6">Criar Categoria</label>
                                    </div>
                                </div>

                                <div class="senha-group">
                                    <label for="senha">Senha</label>
                                    <input type="password" id="senha" name="senha" class="input1" placeholder="*********" required>
                                </div>

                                <div class="confirm-group">
                                    <label for="confirmar-senha">Confirmar Senha</label>
                                    <input type="password" id="confirmar-senha" name="confirmar-senha" class="input1" placeholder="*********" required>
                                </div>
                            </div>
                        </div>  
                    </div>

                    <button type="submit" class="button-confirm">Registrar</button>
                </form>
            </div>
            
</main>

    <?php get_footer()?>    
</body>
<script src="assets/js/script.js"></script>
</html>