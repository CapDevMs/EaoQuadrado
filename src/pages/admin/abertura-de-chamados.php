<?php
    include('../../config/funcoes.php');
    $appName = get_app_name();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abertura de Chamados - ADM</title>
    <?php get_css(['admin/abertura-de-chamados']) ?>
</head>
<body>
    <?php get_header() ?>

    <main>
        <a id="menu" href="../../index.php">Pagina Inicial</a>
        <span>/</span>
        <a id="sub-menu" href="index_adm.php">Painel do administrador</a>
        <span>/</span>
        <a id="sub-menu1" href="abertura-de-chamados.php">Abrir chamado</a>

        <?php get_sidebar_vendedor('cadastrar_produtos'); ?>
        <form action="#" method="post">
            <div class="titulo">
                <label>Nome Completo</label><br>
                <textarea class="caixa" placeholder="John" id="nome" rows="2"></textarea>
            </div>
            <div class="titulo">
                <label>Contato</label><br>
                <textarea class="caixa" id="email" placeholder="(67) 99999-9999" rows="2"></textarea>
            </div>
            <div class="titulo">
                <label>Título</label><br>
                <textarea class="caixa" id="telefone" placeholder="Erro ao cadastrar novo administrador" rows="2"></textarea>
            </div>
        </form>
        <div class="descricao">
                <label>Nome Completo</label>
                <textarea class="caixa2" id="descricao" placeholder="Sua mensagem" rows="15" required></textarea><br><br>
        </div>
        <button id="salvar" type="submit">Enviar Mensagem</button>


        <div id="modalImagem" class="modal">
            <div class="modal-content">
                <span class="fechar">&times;</span>
                <img src="../../assets/img/mens-enviada.png" alt="Imagem de Sucesso" />
            </div>
        </div>

            
                
            


    </main>

    <?php get_footer() ?>
    <script>
        
        document.getElementById('salvar').addEventListener('click', function(event) {
            event.preventDefault(); 

            
            document.getElementById('modalImagem').style.display = "block";
        });

        
        document.querySelector('.fechar').addEventListener('click', function() {
            document.getElementById('modalImagem').style.display = "none";
        });

        
        window.onclick = function(event) {
            if (event.target == document.getElementById('modalImagem')) {
                document.getElementById('modalImagem').style.display = "none";
            }
        };
    </script>
</body>
<script src="../../assets/js/script.js"></script>
</html>