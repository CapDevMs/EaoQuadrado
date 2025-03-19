<?php
    include('../../config/funcoes.php');
    $appName = get_app_name();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <?php get_css(['base', 'style', 'vendedor/tela_gerenciamento_estoque']) ?>
    <title>Document</title>
</head>
<body>
    <?php get_header(); ?>

    <main class="coluna-menu">
        <div>
            <h1>Home / Gerenciamento de Estoque</h1>
                

            <div class="container">
                <div id="barra_lateral">
                    <h2>Gerenciar Minha Conta</h2>
                    <h2 id="barra_lateral">    Meu Perfil</h2>
                    <h2 id="barra_lateral">    Minha Loja</h2>
                    <h2 id="barra_lateral">    Cadastrar Produtos</h2>

                    <h2>Vendas</h2>
                    <h2 id="barra_lateral">    Meu Perfil</h2>
                    <h2 id="barra_lateral">    Minha Loja</h2>
                    <h2 id="barra_lateral">    Cadastrar Produtos</h2>
                </div>

                <div>
                    <h2>gerenciamento de estoque</h2><br><br>
                    
                    <div class="items">
                        <img class="img-item" src="../../assets/img/img-gerenciamento_estoque/item-1.png" alt="erro">

                        <h2 class="text-items">item1</h3>

                        <div id="botao_qtd">
                            <button class="quantidade" id="menos">-</button>
                            <input type="text" class="quantidade" id="quantidade">
                            <button class="quantidade" id="mais">+</button>
                        </div>

                        <div>
                            <h3 class="text-items">R$ 10,00</h3>
                        </div>

                        <div>
                            <input type="radio">
                        </div>
                        
                        <img id="icone_edicao" src="../../assets/img/Icone_edicao.png" alt="">
                    </div>
                    

                    <div class="items">
                        <img class="img-item" src="../../assets/img/img-gerenciamento_estoque/item-2.png" alt="erro">

                        <h2 class="text-items">item2</h3>

                        <div id="botao_qtd">
                            <button class="quantidade" id="menos">-</button>
                            <input type="text" class="quantidade" id="quantidade">
                            <button class="quantidade" id="mais">+</button>
                        </div>

                        <div>
                            <h3 class="text-items">R$ 10,00</h3>
                        </div>

                        <div>
                            <input type="radio">
                        </div>
                        
                        <img id="icone_edicao" src="../../assets/img/Icone_edicao.png" alt="">
                    </div>


                    <div class="items">
                        <img class="img-item" src="../../assets/img/img-gerenciamento_estoque/item-3.png" alt="erro">

                        <h2 class="text-items">item3</h3>

                        <div id="botao_qtd">
                            <button class="quantidade" id="menos">-</button>
                            <input type="text" class="quantidade" id="quantidade">
                            <button class="quantidade" id="mais">+</button>
                        </div>

                        <div>
                            <h3 class="text-items">R$ 10,00</h3>
                        </div>

                        <div>
                            <input type="radio">
                        </div>
                        
                        <img id="icone_edicao" src="../../assets/img/Icone_edicao.png" alt="">
                    </div>


                    <div class="items">
                        <img class="img-item" src="../../assets/img/img-gerenciamento_estoque/item-2.png" alt="erro">

                        <h2 class="text-items">item4</h3>

                        <div id="botao_qtd">
                            <button class="quantidade" id="menos">-</button>
                            <input type="text" class="quantidade" id="quantidade">
                            <button class="quantidade" id="mais">+</button>
                        </div>

                        <div>
                            <h3 class="text-items">R$ 10,00</h3>
                        </div>

                        <div>
                            <input type="radio">
                        </div>
                        
                        <img id="icone_edicao" src="../../assets/img/Icone_edicao.png" alt="">
                    </div>
                </div>
            </div>
            <div id="div-btn">
                <button class="btn" id="btn1">Excluir</button>

                <button class="btn" id="btn2">Adicionar Produto</button>
            </div>
        </div>
    </main>
    
    <?php get_footer(); ?>
</body>
</html>