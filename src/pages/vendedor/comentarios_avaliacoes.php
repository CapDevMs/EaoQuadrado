<?php
    include ('../../config/funcoes.php');
    $appName = get_app_name();
?>
 
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php get_css(['base','style','vendedor/comentarios_avaliacoes'])?>
        <title>Eao Quadrado</title>
    </head>
<body>
    <?php get_header() ?>
    <main>
        

        <div class="banner">
            <img src="../../assets/img/banner_loja.png"alt="Banner da Loja">
        </div>
        <div class="conteudo-main">
            <h1>Avaliações e Comentários</h1>
        </div>
        
        <div class="comentarios">
            <div class="card-usuario">
                <div class="info-usuario">
                    <img class="foto-usuario" src="../vendedor/foto-perfil.png" alt="Foto de Alcir Junior">
                    <span class="nome-uruario">Alcir Junior</span><br>
                    <img src="../vendedor/Five star.png" alt="Estrela preenchida" class="estrela">
                </div>
                <p>Chegou tudo certinho, dentro do prazo, a embalagem intacta, o produto com todas as proteções plásticas, isopor... funciona perfeitamente, já fiz o teste e é ótima.</p>
            </div>
            </div><br><br>
        <div class="comentarios">
            <div class="card-usuario">
                <div class="info-usuario">
                    <img class="foto-usuario" src="../vendedor/foto-perfil.png" alt="Foto de Alcir Junior">
                    <span class="nome-uruario">Vinicius Silva</span><br>
                    <img src="../vendedor/Five star.png" alt="Estrela preenchida" class="estrela">
                </div>
                <p>Comprei uma chuteira muito boa. Excelente! Podem comprar sem medo. Jogo bola a minha vida inteira e posso afirmar que a chuteira é boa. </p>
            </div>
            </div><br><br>
        <div class="comentarios">
            <div class="card-usuario">
                <div class="info-usuario">
                    <img class="foto-usuario" src="../vendedor/foto-perfil.png" alt="Foto de Alcir Junior">
                    <span class="nome-uruario">Matheus Barreto</span><br>
                    <img src="../vendedor/Five star.png" alt="Estrela preenchida" class="estrela">
                </div>
                <p>O produto que eu comprei veio na cor errada, mas o vendedor me ajudou e consegui fazer a troca. Apesar do ocorrido, recomendo!</p>
            </div>
            </div><br><br>
        <div class="comentarios">
            <div class="card-usuario">
                <div class="info-usuario">
                    <img class="foto-usuario" src="../vendedor/foto-perfil.png" alt="Foto de Alcir Junior">
                    <span class="nome-uruario">Maria Eduarda</span><br>
                    <img src="../vendedor/Five star.png" alt="Estrela preenchida" class="estrela">
                </div>
                <p>Excelente produto de ótima qualidade. Atende perfeitamente ao que foi destinado.</p>
            </div>
        </div><br><br>
        <div class="comentarios">
            <div class="card-usuario">
                <div class="info-usuario">
                    <img class="foto-usuario" src="../vendedor/foto-perfil.png" alt="Foto de Alcir Junior">
                    <span class="nome-uruario">Sabrina Brunetto </span><br>
                    <img src="../vendedor/Five star.png" alt="Estrela preenchida" class="estrela">
                </div>
                <p>A compra foi feita com facilidade. Entrega dentro do prazo, inclusive antes do programado. Produto entregue em ordem. Boleto enviado com o prazo acordado.</p>
            </div>
        </div><br><br>
        <div class="comentarios">
            <div class="card-usuario">
                <div class="info-usuario">
                    <img class="foto-usuario" src="../vendedor/foto-perfil.png" alt="Foto de Alcir Junior">
                    <span class="nome-uruario">Jhonatan silva</span><br>
                    <img src="../vendedor/Five star.png" alt="Estrela preenchida" class="estrela">
                </div>
                <p>O produto que eu comprei veio na cor errada, mas o vendedor me ajudou e consegui fazer a troca. Apesar do ocorrido, recomendo!</p>
            </div>
                </div><br><br>
        </div>     
        
    </main>
    

    <?php get_footer() ?>
</body>
<script src="assets/js/script.js"></script>
</html>