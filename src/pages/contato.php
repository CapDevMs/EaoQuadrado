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
    <?php get_css(['cadastros/contato']) ?>
</head>
<body>
    <?php get_header() ?>

    <main>
        <a id="menu" href="home-page">Pagina Inicial</a>
        <span>/</span>
        <div id="sub-menu"><a>Contato</a></div>     
        <div class="container">
        <img src="../../assets/img/contato.jpg" alt="contato" id="contato">
        <form action="#" method="post">      
                <div class="titulo">
                        <label>Nome</label><br>
                        <textarea class="caixa" placeholder="John Doe" id="preco-produto"  rows="2"></textarea><br><br>
                </div>
                <div class="titulo">
                        <label>E-mail</label><br>
                        <textarea class="caixa" id="preco-produto" placeholder="johndoe@gmail.com"  rows="2"></textarea><br><br>
                </div>
                <div class="titulo">
                        <label>Telefone/WhatsApp</label><br>
                        <textarea class="caixa" id="preco-produto" placeholder="(67) 99999-9999" rows="2"></textarea><br><br>
                </div>
                <div class="titulo">
                    <textarea class="caixa2" id="descricao" placeholder="Sua mensagem"  rows="15" required></textarea><br><br>
                </div>
                <button id="salvar" type="submit">Enviar Mensagem</button>
                </div>
            </form>
            </div>
            
                
            


    </main>

    <?php get_footer() ?>
</body>
<script src="../../assets/js/script.js"></script>
</html>