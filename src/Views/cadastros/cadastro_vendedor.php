<?php
$appName = get_app_name();
$baseUrl = get_base_url();
$titulo = 'Cadastro de Vendedor';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Cadastro Vendedor</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php get_css(['/cadastros/cadastro_cliente', '/cadastros/cadastro_vendedor', 'base', 'style']) ?>
    <?php get_breadcrumbs() ?>
</head>
<body>
    <header class="header">
    <?php get_header() ?>
    </header>

<main>

    <div class="roadmap"><?php
        breadcrumb(array('http://localhost/EaoQuadrado/src/' => 'Home', 'http://localhost/EaoQuadrado/src/pages/contato.php' => 'Contato'));
        ?></div>
        
        <form method="post" action="<?php route('salvarCadastroVendedor') ?>" enctype="multipart/form-data">
            <div class="register_client" id="pessoal">
                <h2>Cadastro de Vendedor</h2>
                <div class="form-container">
                    <img src="../../assets/img/foto_cliente.png" alt="foto do cliente" class="client-image">
                    
                    <div class="form">
    
                        <div class="nome-group">
                            <label for="nome">Nome</label>
                            <input type="text" id="nome" name="nome" placeholder="John" >
                            <?php if (session()->has('errors') && isset(session()->get('errors')['nome'])): ?>
                                <?php foreach (session()->get('errors')['nome'] as $message): ?>
                                    <span class="error-message"><?= $message ?></span>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>


                        <div class="sobrenome-group">
                            <label for="sobrenome">Sobrenome</label>
                            <input type="text" id="sobrenome" name="sobrenome" placeholder="Doe" >
                            <?php if (session()->has('errors') && isset(session()->get('errors')['sobrenome'])): ?>
                                <?php foreach (session()->get('errors')['sobrenome'] as $message): ?>
                                    <span class="error-message"><?= $message ?></span>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>

                        <div class="date-group">
                            <label for="nascimento">Data de Nascimento</label>
                            <input type="date" name="nascimento" id="nascimento" >
                            <?php if (session()->has('errors') && isset(session()->get('errors')['nascimento'])): ?>
                                <?php foreach (session()->get('errors')['nascimento'] as $message): ?>
                                    <span class="error-message"><?= $message ?></span>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>

                    
                        <div class="cpf-group">
                            <label for="cpf">CPF</label>
                            <input type="text" id="cpf" name="cpf" placeholder="000.000.000-00" >
                            <?php if (session()->has('errors') && isset(session()->get('errors')['cpf'])): ?>
                                <?php foreach (session()->get('errors')['cpf'] as $message): ?>
                                    <span class="error-message"><?= $message ?></span>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
    
                        <div class="email-group">
                            <label for="email">E-mail</label>
                            <input type="email" id="email" name="email" placeholder="johndoe@gmail.com" >
                            <?php if (session()->has('errors') && isset(session()->get('errors')['email'])): ?>
                                <?php foreach (session()->get('errors')['email'] as $message): ?>
                                    <span class="error-message"><?= $message ?></span>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>

                        <div class="fone-group">
                            <label for="telefone">Número de Telefone</label>
                            <input type="text" id="telefone" name="telefone" placeholder="(67) 99999-9999" >
                            <?php if (session()->has('errors') && isset(session()->get('errors')['telefone'])): ?>
                                <?php foreach (session()->get('errors')['telefone'] as $message): ?>
                                    <span class="error-message"><?= $message ?></span>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    
                        <div class="cep-group">
                            <label for="cep">CEP</label>
                            <input type="text" id="cep" name="cep" placeholder="7900000" >
                            <?php if (session()->has('errors') && isset(session()->get('errors')['cep'])): ?>
                                <?php foreach (session()->get('errors')['cep'] as $message): ?>
                                    <span class="error-message"><?= $message ?></span>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>

                        <div class="endereco-group">
                            <label for="endereco">Endereço</label>
                            <input type="text" id="endereco" name="endereco" placeholder="R.Clovis" >
                            <?php if (session()->has('errors') && isset(session()->get('errors')['endereco'])): ?>
                                <?php foreach (session()->get('errors')['endereco'] as $message): ?>
                                    <span class="error-message"><?= $message ?></span>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>

                        <div class="bairro-group">
                            <label for="bairro">Bairro</label>
                            <input type="text" id="bairro" name="bairro" placeholder="Pioneiro" >
                            <?php if (session()->has('errors') && isset(session()->get('errors')['bairro'])): ?>
                                <?php foreach (session()->get('errors')['bairro'] as $message): ?>
                                    <span class="error-message"><?= $message ?></span>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>

                        <div class="comp-group">
                            <label for="complemento">Complemento (opcional)</label>
                            <input type="text" id="complemento" name="complemento">
                        </div>
                        
                        <div class="senha-group">
                            <label for="senha">Senha</label>
                            <input type="password" id="senha" name="senha" placeholder="*********" >
                            <?php if (session()->has('errors') && isset(session()->get('errors')['senha'])): ?>
                                <?php foreach (session()->get('errors')['senha'] as $message): ?>
                                    <span class="error-message"><?= $message ?></span>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>

                        <div class="confirm-group">
                            <label for="confirmar-senha">Confirmar Senha</label>
                            <input type="password" id="confirmar-senha" name="confirmar-senha" placeholder="*********" >
                        </div>
        
                    </div>
                </div>
            </div>
        

            <div class="register_client" id="loja">
                <h2>Cadastro de Loja</h2>
                <div class="shop-container">
                    <div class="label-container" id="grid1">
                        <div class="input_label">
                            <label>Nome da Loja</label>
                            <input type="text" name="nome_loja" class="input-shop-container" placeholder="SmartZone" >
                            <?php if (session()->has('errors') && isset(session()->get('errors')['nome_loja'])): ?>
                                <?php foreach (session()->get('errors')['nome_loja'] as $message): ?>
                                    <span class="error-message"><?= $message ?></span>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                        
                        <div class="input_label">
                            <label>CNPJ</label>
                            <input type="text" name="cnpj" class="input-shop-container" placeholder="00.000.000/0000-00" >
                            <?php if (session()->has('errors') && isset(session()->get('errors')['cnpj'])): ?>
                                <?php foreach (session()->get('errors')['cnpj'] as $message): ?>
                                    <span class="error-message"><?= $message ?></span>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>

                        <div class="input_label">
                            <label>Email</label>
                            <input type="email" name="email_loja" class="input-shop-container" placeholder="smartcell@hotmail.com" >
                            <?php if (session()->has('errors') && isset(session()->get('errors')['email_loja'])): ?>
                                <?php foreach (session()->get('errors')['email_loja'] as $message): ?>
                                    <span class="error-message"><?= $message ?></span>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>

                        <div class="input_label">
                            <label>Telefone/Whatsapp</label>
                            <input type="tel" name="telefone_loja" class="input-shop-container" placeholder="(67)33232323" >
                            <?php if (session()->has('errors') && isset(session()->get('errors')['telefone_loja'])): ?>
                                <?php foreach (session()->get('errors')['telefone_loja'] as $message): ?>
                                    <span class="error-message"><?= $message ?></span>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>

                        <div class="input_label">
                            <label>Instagram/Facebook</label>
                            <input type="text" name="rede_social" class="input-shop-container" placeholder="@htbcellsmart" >
                            <?php if (session()->has('errors') && isset(session()->get('errors')['rede_social'])): ?>
                                <?php foreach (session()->get('errors')['rede_social'] as $message): ?>
                                    <span class="error-message"><?= $message ?></span>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </div>
            
                    <div class="label-container" id="grid2">
                        <div class="input_label">
                            <label for="endereco_loja">Endereço da Loja</label>
                            <input type="text" name="endereco_loja" class="input-shop-container" placeholder="R.Rui Barbosa" >
                            <?php if (session()->has('errors') && isset(session()->get('errors')['endereco_loja'])): ?>
                                <?php foreach (session()->get('errors')['endereco_loja'] as $message): ?>
                                    <span class="error-message"><?= $message ?></span>
                                <?php endforeach; ?>
                            <?php endif; ?>
                    </div>

                    <div class="input_label">
                            <label for="numero_endereco">Número/Bloco/Apto</label>
                            <input type="text" name="numero_endereco" class="input-shop-container" placeholder="345" >
                            <?php if (session()->has('errors') && isset(session()->get('errors')['numero_endereco'])): ?>
                                <?php foreach (session()->get('errors')['numero_endereco'] as $message): ?>
                                    <span class="error-message"><?= $message ?></span>
                                <?php endforeach; ?>
                            <?php endif; ?>
                    </div>

                    <div class="input_label">
                            <label for="complemento">Complemento (opcional)</label>
                            <input type="text" name="complemento" class="input-shop-container" placeholder="">
                    </div>

                    <div class="input_label">
                            <label for="bairro_loja">Bairro</label>
                            <input type="text" name="bairro_loja" class="input-shop-container" placeholder="Centro" >
                            <?php if (session()->has('errors') && isset(session()->get('errors')['bairro_loja'])): ?>
                                <?php foreach (session()->get('errors')['bairro_loja'] as $message): ?>
                                    <span class="error-message"><?= $message ?></span>
                                <?php endforeach; ?>
                            <?php endif; ?>
                    </div>

                    <div class="input_label">
                            <label for="cep_loja">CEP</label>
                            <input type="text" name="cep_loja" class="input-shop-container" placeholder="79004002" >
                            <?php if (session()->has('errors') && isset(session()->get('errors')['cep_loja'])): ?>
                                <?php foreach (session()->get('errors')['cep_loja'] as $message): ?>
                                    <span class="error-message"><?= $message ?></span>
                                <?php endforeach; ?>
                            <?php endif; ?>
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
                
                <div class="content_vend">
                    <div class="terms">
                        <div class="checkbox-container">
                            <input type="checkbox" name="termos" class="checkbox" >
                            <label for="termos">Li e concordo com os <a class="term-link" href="#">Termos de Uso</a></label>
                            <?php if (session()->has('errors') && isset(session()->get('errors')['termos'])): ?>
                                <?php foreach (session()->get('errors')['termos'] as $message): ?>
                                    <span class="error-message"><?= $message ?></span>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                        <div class="checkbox-container">
                            <input type="checkbox" name="politicas" class="checkbox" >
                            <label for="politicas">Li e concordo com as <a class="term-link" href="#">Políticas da Empresa</a></label>
                            <?php if (session()->has('errors') && isset(session()->get('errors')['politicas'])): ?>
                                <?php foreach (session()->get('errors')['politicas'] as $message): ?>
                                    <span class="error-message"><?= $message ?></span>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    
                    <div class="buttons-cont">
                        <button type="reset" class="button-cancel" onclick="voltarPagina()">Cancelar</button>
                        <button type="submit" class="button-confirm">Registrar</button>
                    </div>
                </div>
        </form>
</main>
<footer>
    <?php get_footer() ?>
</footer>
</body>
<script src="assets/js/script.js"></script>
</html>