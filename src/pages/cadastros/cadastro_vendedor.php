<?php 
    include('../config/funcoes.php');
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php get_css(['cadastro_cliente', 'cadastro_vendedor', 'base', 'style']) ?>
    
    <title>Eao Quadrado</title>
</head>
<body>
    <header class="header">
    <?php get_header() ?>
    </header>

    <main>
        <div class="roadmap">Home / Cadastro de Cliente</div>
            <div class="register_client">
                <h2>Cadastro de Cliente</h2>
                <div class="form-container">
                    <img src="../assets/img/foto_cliente.png" alt="foto do cliente" class="client-image">
                    
                    <form class="form">
                        <div class="form-row">
                            <div class="form-group">
                                <label for="nome">Nome</label>
                                <input type="text" id="nome" name="nome" placeholder="John" required>
                            </div>
                            <div class="form-group">
                                <label for="sobrenome">Sobrenome</label>
                                <input type="text" id="sobrenome" name="sobrenome" placeholder="Doe" required>
                            </div>
                        </div>
        
                        <div class="form-row">
                            <div class="form-group">
                                <label for="nascimento">Data de Nascimento</label>
                                <input type="date" id="nascimento" name="nascimento" required>
                            </div>
                            <div class="form-group">
                                <label for="cpf">CPF</label>
                                <input type="text" id="cpf" name="cpf" placeholder="000.000.000-00" required>
                            </div>
                        </div>
        
                        <div class="form-row">
                            <div class="form-group">
                                <label for="email">E-mail</label>
                                <input type="email" id="email" name="email" placeholder="johndoe@gmail.com" required>
                            </div>
                            <div class="form-group">
                                <label for="telefone">Número de Telefone</label>
                                <input type="text" id="telefone" name="telefone" placeholder="(67) 99999-9999" required>
                            </div>
                        </div>
        
                        <div class="form-row">
                            <div class="form-group">
                                <label for="cep">CEP</label>
                                <input type="text" id="cep" name="cep" placeholder="7900000" required>
                            </div>
                            <div class="form-group">
                                <label for="endereco">Endereço</label>
                                <input type="text" id="endereco" name="endereco" placeholder="R.Clovis" required>
                            </div>
                        </div>
        
                        <div class="form-row">
                            <div class="form-group">
                                <label for="bairro">Bairro</label>
                                <input type="text" id="bairro" name="bairro" placeholder="Pioneiro" required>
                            </div>
                            <div class="form-group">
                                <label for="complemento">Complemento (opcional)</label>
                                <input type="text" id="complemento" name="complemento">
                            </div>
                        </div>
        
                        <div class="password-group">
                            <div class="form-group">
                                <label for="senha">Senha</label>
                                <input type="password" id="senha" name="senha" placeholder="*********" required>
                            </div>
                            <div class="form-group">
                                <label for="confirmar-senha">Confirmar Senha</label>
                                <input type="password" id="confirmar-senha" name="confirmar-senha" placeholder="*********" required>
                            </div>
                        </div>
                    </form>
                </div>
    
                </form>
            </div>
        </div>

        <div class="register_client" id="pessoal">
            <h2>Cadastro de Vendedor</h2>
            <div class="form-container">
                <img src="../assets/img/foto_cliente.png" alt="foto do cliente" class="client-image">
                
                <form class="form">
 
                    <div class="nome-group">
                        <label for="nome">Nome</label>
                        <input type="text" id="nome" name="nome" placeholder="John" required>
                    </div>


                    <div class="sobrenome-group">
                        <label for="sobrenome">Sobrenome</label>
                        <input type="text" id="sobrenome" name="sobrenome" placeholder="Doe" required>
                    </div>

                    <div class="date-group">
                        <label for="nascimento">Data de Nascimento</label>
                        <input type="date" id="nascimento" name="nascimento" required>
                    </div>

                
                    <div class="cpf-group">
                        <label for="cpf">CPF</label>
                        <input type="text" id="cpf" name="cpf" placeholder="000.000.000-00" required>
                    </div>
  
                    <div class="email-group">
                        <label for="email">E-mail</label>
                        <input type="email" id="email" name="email" placeholder="johndoe@gmail.com" required>
                    </div>

                    <div class="fone-group">
                        <label for="telefone">Número de Telefone</label>
                        <input type="text" id="telefone" name="telefone" placeholder="(67) 99999-9999" required>
                    </div>
                
                    <div class="cep-group">
                        <label for="cep">CEP</label>
                        <input type="text" id="cep" name="cep" placeholder="7900000" required>
                    </div>

                    <div class="endereco-group">
                        <label for="endereco">Endereço</label>
                        <input type="text" id="endereco" name="endereco" placeholder="R.Clovis" required>
                    </div>

                    <div class="bairro-group">
                        <label for="bairro">Bairro</label>
                        <input type="text" id="bairro" name="bairro" placeholder="Pioneiro" required>
                    </div>

                    <div class="comp-group">
                        <label for="complemento">Complemento (opcional)</label>
                        <input type="text" id="complemento" name="complemento">
                    </div>
                    
                    <div class="senha-group">
                        <label for="senha">Senha</label>
                        <input type="password" id="senha" name="senha" placeholder="*********" required>
                    </div>

                    <div class="confirm-group">
                        <label for="confirmar-senha">Confirmar Senha</label>
                        <input type="password" id="confirmar-senha" name="confirmar-senha" placeholder="*********" required>
                    </div>
    
                </form>
            </div>
        </div>
    

        <form class="register_client" id="loja">
            <h2>Cadastro de Loja</h2>
            <div class="shop-container">
                <div class="label-container" id="grid1">
                    <div class="input_label">
                        <label>Nome da Loja</label>
                        <input type="text" name="nome_loja" class="input-shop-container" placeholder="SmartZone" required>
                    </div>
                    
                    <div class="input_label">
                        <label>CNPJ</label>
                        <input type="text" name="cnpj" class="input-shop-container" placeholder="00.000.000/0000-00" required>
                    </div>

                    <div class="input_label">
                        <label>Email</label>
                        <input type="email" name="email_loja" class="input-shop-container" placeholder="smartcell@hotmail.com" required>
                    </div>

                    <div class="input_label">
                        <label>Telefone/Whatsapp</label>
                        <input type="tel" name="telefone_loja" class="input-shop-container" placeholder="(67)33232323" required>
                    </div>

                    <div class="input_label">
                        <label>Instagram/Facebook</label>
                        <input type="text" name="rede_social" class="input-shop-container" placeholder="@htbcellsmart" required>
                    </div>
                </div>
        
                <div class="label-container" id="grid2">
                    <div class="input_label">
                        <label for="endereco_loja">Endereço da Loja</label>
                        <input type="text" name="endereco_loja" class="input-shop-container" placeholder="R.Rui Barbosa" required>
                   </div>

                   <div class="input_label">
                        <label for="numero_endereco">Número/Bloco/Apto</label>
                        <input type="text" name="numero_endereco" class="input-shop-container" placeholder="345" required>
                   </div>

                   <div class="input_label">
                        <label for="complemento">Complemento (opcional)</label>
                        <input type="text" name="complemento" class="input-shop-container" placeholder="">
                   </div>

                   <div class="input_label">
                        <label for="bairro_loja">Bairro</label>
                        <input type="text" name="bairro_loja" class="input-shop-container" placeholder="Centro" required>
                   </div>

                   <div class="input_label">
                        <label for="cep_loja">CEP</label>
                        <input type="text" name="cep_loja" class="input-shop-container" placeholder="79004002" required>
                    </div>

                </div>

                <div class="categorias">
                    <h3 class="subtitle">Categorias</h3>
                    <div class="checkbox-container2"> 
                        <input type="checkbox" name="categoria[]" value="celular" class="checkbox2"><p>Celulares</p>
                        <input type="checkbox" name="categoria[]" value="computador" class="checkbox2"><p>Computadores</p>
                        <input type="checkbox" name="categoria[]" value="smartwache" class="checkbox2"><p>Smartwatches</p>
                        <input type="checkbox" name="categoria[]" value="camera" class="checkbox2"><p>Câmera</p>
                        <input type="checkbox" name="categoria[]" value="fone" class="checkbox2"><p>Fones de Ouvido</p>
                        <input type="checkbox" name="categoria[]" value="game" class="checkbox2"><p>Games</p>
                        <input type="checkbox" name="categoria[]" value="roupa" class="checkbox2"><p>Roupas</p>
                        <input type="checkbox" name="categoria[]" value="ferramenta" class="checkbox2"><p>Ferramentas</p>
                    </div>
                </div>
                
                <div class="anexar_img">
                    <h3 class="subtitle">Anexar Imagens (Selecionar até 5 Imagens)</h3>
                    <div class="frame_file"> 
                        <input type="file" name="imagens[]" multiple>
                        <label for="file">Selecionar Arquivo</label> 
                    </div>
                </div>
            </div>
            
            <div class="terms">
                <div class="checkbox-container">
                    <input type="checkbox" name="termos" class="checkbox" required>
                    <label for="termos">Li e concordo com os <a class="term-link" href="#">Termos de Uso</a></label>
                </div>
                <div class="checkbox-container">
                    <input type="checkbox" name="politicas" class="checkbox" required>
                    <label for="politicas">Li e concordo com as <a class="term-link" href="#">Políticas da Empresa</a></label>
                </div>
            </div>
            
            <div class="buttons-cont">
                <button type="reset" class="button-cancel">Cancelar</button>
                <button type="submit" class="button-confirm">Registrar</button>
            </div>
        </form>
    </main>
    <footer>
    <?php get_footer() ?>
    </footer>
</body>
<script src="assets/js/script.js"></script>
</html>