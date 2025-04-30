<?php
    include('../../config/funcoes.php');
    $appName = get_app_name();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $appName . ' - ' . $titulo ?? '' ?></title>
    <?php get_css([ 'base', 'style', 'admin/abertura-de-chamados' ]) ?>
</head>
<body>  
    <?php get_header() ?>

    <main class="row">    
        <div class="col-md-1 col-sm-hidden">
            <a id="menu" href="../../index.php">Pagina Inicial</a>
            <span>/</span>
            <a id="sub-menu" href="index_adm.php">Painel do administrador</a>
            <span>/</span>
            <a id="sub-menu1" href="abertura-de-chamados.php">Abrir chamado</a>
            
            <?php get_sidebar_adm('abrir_chamado'); ?>
        </div>

        
        <div class="col-md-9 col-sm-12">
            <form action="#" method="get">
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
                    <label>Descrição do Chamado</label>
                    <textarea class="caixa2" id="descricao" placeholder="Sua mensagem" rows="15" required></textarea><br><br>
            </div>
            
            <input type="file" id="arquivo" name="arquivo" accept="image/*" multiple><br><br>
            <button id="salvar" type="submit">Enviar Mensagem</button>
            <div id="modalImagem" class="modal">
                <div class="modal-content">
                    <span class="fechar">&times;</span>
                    <img src="../../assets/img/chamado-enviado.png" alt="Imagem de Sucesso" />
                </div>
            </div>
        </div>
    </main>

    <?php get_footer() ?>
</body>
<script src="../../assets/js/abertura_de_chamados_adm.js"></script>
</html>