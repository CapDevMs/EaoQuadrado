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
        <a id="menu" href="index.php">Pagina Inicial</a>
        <span>/</span>
        <div id="sub-menu"><a href="contato.php">Contato</a></div>     

        <div class="container_geral row">

            <div class="contatos-container">
                <div class="contatos-title">
                    <hr class="round">
                    <h1>Entre em Contato</h1>
                    
                </div>
                <p>Atendimento 24 horas</p>
                <p>Telefone: +67991377273</p>
                <hr>
                <div class="contatos-title">
                    <hr class="round">
                    <h1>Mande um Email</h1>
                </div>
                <p>Respondemos e-mail em 24 horas</p>
                <p>Email: customer@exclusive.com</p>
                <p>Email: support@exclusive.com</p>
            </div>


            <form action="#" class="input-container" method="post">

                <div class="caixa-container row">
                    
                    <div class="container-titulos">
                        <div class="titulo">
                            <label for="nome">Nome</label>
                            <input class="caixa" placeholder="John Doe" id="nome" rows="2"></input>
                        </div>
                        <div class="titulo">
                            <label for="email">E-mail</label>
                            <input class="caixa" id="email" placeholder="johndoe@gmail.com" rows="2"></input>
                        </div>
                        <div class="titulo">
                            <label for="telefone">Telefone/WhatsApp</label>
                            <input class="caixa" id="telefone" placeholder="(67) 99999-9999" rows="2"></input>
                        </div>
                    </div>
            
                    <textarea class="caixa2" id="descricao" placeholder="Sua mensagem" rows="15" required></textarea>
                    <div class="button-container">
                        <button id="salvar" type="submit">Enviar Mensagem</button>
                    </div>
                </div>

            </form>
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