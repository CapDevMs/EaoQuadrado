<?php
include('../../config/funcoes.php');
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php get_css(['minha_loja','admin']) ?>
    <title>Eao Quadrado</title>
</head>
<body>
    <?php get_header() ?>

    <main>
        <asside class="sidebar">
            <h2>Gerenciar Minha Conta</h2> 
            <ul> 
                <li><a href="#">Meu Perfil</a></li> 
                <li><a href="#" class="active">Minha Loja</a></li> 
                <li><a href="#">Cadastrar Produtos</a></li> 
            </ul>
            
            <h2>Vendas</h2> 
            <ul> 
                <li><a href="#">Histórico de Vendas</a></li> 
                <li><a href="#">Trocas/Cancelamentos</a></li> 
                <li><a href="#">Gerenciamento de estoque</a></li> 
            </ul>
        </asside> 
        <section class="container">
            <h1>Edite Sua Loja</h1> 
            
            <div class="banner">
                <img src="../../assets/img/Banner_loja.png" alt="Banner da Loja"> 
            </div>

            <form class="form">
                <div class="form-group">
                    <label>Nome da Loja</label> 
                    <input type="text" value="Studio"> 
                </div>
                <div class="form-group">
                    <label>Telefone</label> 
                    <input type="text" value="(67) 992346578"> 
                </div>
                
                <div class="form-group">
                    <label>Email</label> 
                    <input type="email" value="studio@gmail.com"> 
                </div>
                <div class="form-group">
                    <label>Endereço</label> 
                    <input type="text" value="Av. 15 de agosto, 506"> 
                </div>
                
                <div class="form-group">
                    <label>CEP</label> 
                    <input type="text" value="79113560"> 
                </div>
                <div class="form-group">
                    <label>Número</label> 
                    <input type="text" value="506"> 
                </div>
                
                <div class="form-check">
                    <label>
                        <input class="form-check-input" type="radio" name="document" checked> CPF 
                    </label>
                    <label>
                        <input type="radio" class="form-check-input" name="document"> CNPJ 
                    </label>
                    <div class="form-group">
                        <input type="text" placeholder="000.000.000-00"> 
                    </div>
                </div>
                
                <div class="buttons">
                    <button type="button" class="btn-cancel">Cancelar</button> 
                    <button type="submit" class="btn-save">Salvar Mudanças</button> 
                </div>
            </form> 
        </section>
    </main>

    <?php get_footer() ?>
</body>
<script src="../../assets/js/script.js"></script>
</html>