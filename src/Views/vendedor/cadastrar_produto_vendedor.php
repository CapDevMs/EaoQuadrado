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
    <title><?= $appName . ' - ' . $titulo ?? '' ?></title>
    <?php get_css(['vendedor/cadastrar_produto_vendedor']) ?>
    <?php get_css_components() ?>

</head>
<body>
    <?php get_header() ?>

    
    <main>
        <div class="sub-menu">
            <a href="meu_perfil_vendedor.php" id="conta">
                <h6>Conta</h6>
            </a>
            <span id="separator">/</span>
            <a href="minha_loja.php" id="minha-conta">
                <h6>Minha Conta</h6>
            </a>
            <span id="separator">/</span>
            <a href="cadastrar_produto_vendedor.php" id="cadastrar-produto">
                <h6>Cadastrar Produto</h6></a>
        </div>
    
        <div id="titulo">Cadastrar Produto</div>
    
        <?php get_sidebar_vendedor('cadastrar_produtos'); ?>
    
            <form action="/cadastrarProdutoVendedor/salvarProduto" method="post" enctype="multipart/form-data">      
                <div class="linha-horizontal">
                    <div class="linha-1">
                        <label for="nome-produto">Nome do Produto</label><br>
                        <textarea id="nome-produto" name="nome" rows="2" placeholder="Programming Mug"></textarea><br><br>
                    </div>
                    
                    <div class="linha-1">
                        <label for="link-produto">Link do Produto</label><br>
                        <textarea id="link-produto" name="link" placeholder="www.exemplo.com.br" rows="2" required></textarea><br><br>
                    </div>
                </div>
    
                <div class="linha-horizontal">
                    <div class="linha-2">
                        <label for="marca-produto">Marca do Produto</label><br>
                        <textarea id="marca-produto" name="marca" placeholder="BR Tech Sistemas" rows="2" required></textarea><br><br>
                    </div>
                    
                    <div class="linha-2">
                        <label for="modelo-produto">Modelo do Produto</label><br>
                        <textarea id="modelo-produto" name="modelo" placeholder="Caneca" rows="2" required></textarea><br><br>
                    </div>
                </div>
    
                <div class="linha-horizontal">
                    <div class="linha-3">
                       <select id="categoria" name="id_categoria" required>
                            <option value="">Selecione uma categoria</option>
                            <?php foreach ($categorias as $cat): ?>
                                <option value="<?= $cat['id_categoria'] ?>" 
                                    <?= (isset($dados['id_categoria']) && $dados['id_categoria'] == $cat['id_categoria']) ? 'selected' : '' ?>>
                                    <?= htmlspecialchars($cat['nome']) ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>    
    
                    <div class="linha-3">
                        <label for="preco-produto" id="label-preco">Preço do Produto</label><br>
                        <textarea id="preco-produto" name="preco" rows="2"></textarea><br><br>
                    </div>
    
                    <div class="linha-3">
                        <label id="label-quantidade-produto">Quantidade</label><br>
                        <input type="number" id="quantidade-produto"  name="quantidade" min="0" required>
                    </div>
                </div>
    
                <div class="linha-1">
                    <label for="descricao-produto">Descrição</label><br>
                    <textarea id="descricao-produto" name="descricao" rows="15" required></textarea><br><br>
                </div>
    
                <label for="arquivo">Inserir Imagens</label><br>
                <input type="file" id="arquivo" name="arquivo[]" accept="image/*" multiple><br><br>

                <div id="image-preview-container" class="image-preview-container">
                </div>

                <div class="previas">
                    
                </div>
                <div class="botoes-container">
                    <button id="cancelar" type="button">Cancelar</button>
                    <button id="salvar" type="submit">Salvar</button> 
                </div>
            </form>
            <div id="mensagem-sucesso" style="display: none; color: green; padding: 10px; border: 1px solid green; margin-top: 20px;">
                Produto salvo com sucesso!
            </div>
        
    </main>
    <?php get_footer() ?>

    <script src="../../assets/js/script.js"></script>
    <script>
        document.getElementById('salvar').addEventListener('click', function() {
            
            var mensagemSucesso = document.getElementById('mensagem-sucesso');
            mensagemSucesso.style.display = 'block';

            
            setTimeout(function() {
                mensagemSucesso.style.display = 'none';
            }, 3000);  
        });

        document.getElementById('arquivo').addEventListener('change', function(event) {
            var files = event.target.files;
            var previasContainer = document.querySelector('.previas');

            for (var i = 0; i < files.length; i++) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    var img = document.createElement('img');
                    img.src = e.target.result;
                    img.alt = 'img' + (previasContainer.children.length + 1);
                    img.style.width = '200px';  
                    img.style.height = '300px';
                    img.style.objectFit = 'cover';

                    previasContainer.appendChild(img);
                }
                reader.readAsDataURL(files[i]);
            }
        });
    </script>
</body>
</html>

