<?php 
   $appName = get_app_name();
   $base_url = get_base_url();
   $titulo = 'Cadastro de Administrador';
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Cadastro ADM</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php get_css(['sidebar','cadastro_adm', 'base', 'style']) ?>
    <?php get_header(); ?>
    <link rel = 'stylesheet' href="<?=get_base_url();?>assets/css/cadastro_adm.css">
    <title>Eao Quadrado</title>
</head>
    <main>
    <div class="roadmap">Home / Painel do Administrador / Cadastrar Novo Administrador</div>
            <div class="container-geral">
            <?php get_sidebar_admin('cadastrarAdm') ?>
            
                <form action="#">
                    <div class="register_client">
                        <h2>Cadastro de Administrador</h2>
                        <img src="<?php get_base_url(); ?>assets/img/foto_cliente.png" alt="foto do cliente">
                        
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
<script src="<?=get_base_url();?>assets/js/script.js"></script>
</html>