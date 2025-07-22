<?php
    $appName = get_app_name();
    $baseUrl = get_base_url();
    $titulo = 'Cadastro de Produto';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $appName . ' - ' . $titulo ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <?php get_css(['style','cadastrar_produto_vendedor','base']) ?>
    <?php get_css_components() ?>
</head>
<body>
    <?php get_header() ?>

    <main>
        <div class="sub-menu">
            <a href="meu_perfil_vendedor.php" id="conta"><h6>Conta</h6></a>
            <span id="separator">/</span>
            <a href="<?= $baseUrl ?>vendedor/minhaLoja" id="minha-conta"><h6>Minha Conta</h6></a>
            <span id="separator">/</span>
            <a href="cadastrar_produto_vendedor.php" id="cadastrar-produto"><h6>Cadastrar Produto</h6></a>
        </div>

        <div id="titulo">Cadastrar Produto</div>

        <?php get_sidebar_vendedor('cadastrar_produtos'); ?>

        <!-- MENSAGEM DE SUCESSO -->
        <!-- <?php if (!empty($sucesso)): ?>
            <div style="background-color: #d4edda; color: #155724; padding: 10px; border: 1px solid #c3e6cb; border-radius: 4px; margin-bottom: 20px;">
                Produto salvo com sucesso!
            </div>
        <?php endif; ?> -->
        <!-- MENSAGEM DE ERRO -->
        <?php if (!empty($erros)): ?>
            <div style="background-color: #f8d7da; color: #721c24; padding: 10px; border: 1px solid #f5c6cb; margin-bottom: 20px; border-radius: 4px;">
                <strong>Erros encontrados:</strong>
                <ul>
                    <?php foreach ($erros as $erro): ?>
                        <li><?= htmlspecialchars($erro) ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>

        <form action="<?= get_base_url(); ?>vendedor/cadastroProduto" method="post" enctype="multipart/form-data" id="form-cadastro-produto">
            <div class="linha-horizontal">
                <div class="linha-1">
                    <label for="nome-produto">Nome do Produto</label><br>
                    <textarea id="nome-produto" name="nome" rows="2" required><?= htmlspecialchars($dados['nome'] ?? '') ?></textarea><br><br>
                </div>

                <!-- <div class="linha-1">
                    <label for="link-produto">Link do Produto</label><br>
                    <textarea id="link-produto" name="link" rows="2"><?= htmlspecialchars($dados['link'] ?? '') ?></textarea><br><br>
                </div> -->
            </div>

            <div class="linha-horizontal">
                <div class="linha-2">
                    <label for="marca-produto">Marca do Produto</label><br>
                    <textarea id="marca-produto" name="marca" rows="2" required><?= htmlspecialchars($dados['marca'] ?? '') ?></textarea><br><br>
                </div>

                <div class="linha-2">
                    <label for="modelo-produto">Modelo do Produto</label><br>
                    <textarea id="modelo-produto" name="modelo" rows="2" required><?= htmlspecialchars($dados['modelo'] ?? '') ?></textarea><br><br>
                </div>
            </div>

            <div class="linha-horizontal">
                <div class="linha-3">
                    <label for="categoria">Categoria</label><br>
                    <select id="categoria" name="id_categoria" required>
                        <option value="">Selecione uma categoria</option>
                        <?php foreach ($categorias as $cat): ?>
                            <option value="<?= $cat['id_categoria'] ?>" <?= (isset($dados['id_categoria']) && $dados['id_categoria'] == $cat['id_categoria']) ? 'selected' : '' ?>>
                                <?= htmlspecialchars($cat['nome']) ?>
                            </option>
                        <?php endforeach; ?>
                    </select><br><br>
                </div>
            </div>

            <div class="linha-3">
                <label for="preco-produto">Preço do Produto</label><br>
                <input type="text" id="preco-produto" name="preco" required value="<?= htmlspecialchars($dados['preco'] ?? '') ?>"><br><br>
            </div>

            <div class="linha-3">
                <label for="quantidade-produto">Quantidade</label><br>
                <input type="number" id="quantidade-produto" name="quantidade" min="0" required value="<?= htmlspecialchars($dados['quantidade'] ?? '') ?>"><br><br>
            </div>

            <div class="linha-1">
                <label for="descricao-produto">Descrição</label><br>
                <textarea id="descricao-produto" name="descricao" rows="10" required><?= htmlspecialchars($dados['descricao'] ?? '') ?></textarea><br><br>
            </div>

            <label for="arquivo">Inserir Imagens</label><br>
            <input type="file" id="arquivo" name="imagens[]" accept="image/*" multiple><br><br>

            <div class="previas"></div>

            <div class="botoes-container">
                <button id="cancelar" type="button">Cancelar</button>
                <button id="salvar" type="submit">Salvar</button>
            </div>
        </form>

        <!-- POP-UP DE SUCESSO -->
        <div id="popupSucesso" class="popup-sucesso oculto">
            <div class="popup-conteudo">
                <div class="icone-wrapper">
                <i class="fa-solid fa-circle-check"></i>
                </div>
                <h2>Sucesso</h2>
                <p>Produto salvo com sucesso</p>
                <button class="btn-ok" id="botao-ok">OK</button>
            </div>
        </div>
    </main>

    <?php get_footer() ?>



<script type="module" src="<?= get_base_url(); ?>assets/js/vendedor/cadastro_produto_vendedor.js"></script>
</body>
</html>
