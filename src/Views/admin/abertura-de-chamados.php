<?php
    $appName = get_app_name();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $appName . ' - ' . $titulo ?? '' ?></title>
    <?php get_css([ 'sidebar','style','base','admin/abertura-de-chamados' ]) ?>
</head>
<body>  
    <?php get_header() ?>

    <main>    
        <div class="row">
            <h1 id="abertura-title">Abertura de Chamados</h1>
            <div class="col-md-3 col-sm-hidden">

                <?php get_sidebar_admin('abrir_chamado'); ?> 
            </div>

            
            <div class="container-form col-md-8 col-sm-12">
                <form action="#" method="get">
                    <div class="titulo">
                        <label>Nome Completo</label><br>
                        <input type="text" class="caixa" placeholder="John" id="nome">
                    </div>
                    <div class="titulo">
                        <label>Contato</label><br>
                        <input type="text" class="caixa" id="email" placeholder="(67) 99999-9999">
                    </div>
                    <div class="titulo">
                        <label>Título</label><br>
                        <input type="text" class="caixa" id="telefone" placeholder="Erro ao cadastrar novo administrador">
                    </div>

                    <div id="div-descricao">
                        <label>Descrição do Chamado</label><br>
                        <textarea class="caixa2" id="descricao" placeholder="Sua mensagem" rows="15" required></textarea><br><br>
                    </div>
                </form>
                
            
                <div class="anexar-arquivo">
                    <label for="arquivo">Anexar Arquivo</label>
                    <input type="file" id="arquivo" name="arquivo" accept="image/*" multiple>
                </div>

                <div id="div-salvar">
                    <button id="salvar" type="submit">Enviar Mensagem</button>
                </div>

                <div id="modalImagem" class="modal">
                    <div class="modal-content">
                        <span class="fechar">&times;</span>
                        <img src="../../assets/img/chamado-enviado.png" alt="Imagem de Sucesso" />
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php get_footer() ?>
</body>
<script src="../../assets/js/abertura_de_chamados_adm.js"></script>
</html>