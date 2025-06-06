<?php
    $appName = get_app_name();
    $baseUrl = get_base_url();
    $titulo = 'Gerenciamento de Estoque';
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
            <div id="roadmap" class="pt-2 pb-3">
                <span>Home </span>/
                <span><b>Gerenciamento de Estoque</b></span>
            </div>
                

            <div class="container">
                <div>
                    <div class="pb-2">
                        <h2 id="menu-lateral">Gerenciar Minha Conta</h2>
                        <h2 class="barra_lateral btn-lateral">Meu Perfil</h2>
                        <h2 class="barra_lateral btn-lateral">Minha Loja</h2>
                        <h2 class="barra_lateral btn-lateral">Cadastrar Produtos</h2>
                    </div>
                    <div class="pb-2">
                        <h2 id="menu-lateral">Vendas</h2>
                        <h2 class="barra_lateral btn-lateral">Histórico de Vendas</h2>
                        <h2 class="barra_lateral btn-lateral">Trocas / Cancelamentos</h2>
                        <h2 id="pg-atual" class="barra_lateral btn-lateral">Gerenciamento de estoque</h2>
                    </div>
                </div>

                <div>
                    <h2>gerenciamento de estoque</h2><br><br>
                    
                    <div id="sessoes-itens">
                        <span class="sessoes-itens">Produto</span>
                        <span class="sessoes-itens">Quantidade</span>
                        <span class="sessoes-itens">Preço</span>
                        <span class="sessoes-itens">Selecionar</span>
                        <span class="sessoes-itens">Editar</span>
                    </div>

                    <div class="items">
                        <img class="img-item" src="<?= get_base_url(); ?>assets/img/img-gerenciamento_estoque/item-1.png" alt="erro">

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
                        
                        <img id="icone_edicao" src="<?= get_base_url(); ?>assets/img/Icone_edicao.png" alt="">
                    </div>
                    

                    <div class="items">
                        <img class="img-item" src="<?= get_base_url(); ?>assets/img/img-gerenciamento_estoque/item-2.png" alt="erro">

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
                        
                        <img id="icone_edicao" src="<?= get_base_url(); ?>assets/img/Icone_edicao.png" alt="">
                    </div>


                    <div class="items">
                        <img class="img-item" src="<?= get_base_url(); ?>assets/img/img-gerenciamento_estoque/item-3.png" alt="erro">

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
                        
                        <img id="icone_edicao" src="<?= get_base_url(); ?>assets/img/Icone_edicao.png" alt="">
                    </div>


                    <div class="items">
                        <img class="img-item" src="<?= get_base_url(); ?>assets/img/img-gerenciamento_estoque/item-2.png" alt="erro">

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
                        
                        <img id="icone_edicao" src="<?= get_base_url(); ?>assets/img/Icone_edicao.png" alt="">
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