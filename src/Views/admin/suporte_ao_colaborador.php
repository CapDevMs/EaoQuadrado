<?php
$titulo = 'Suporte';
?>
<!DOCTYPE html>
<html lang="pt-BR">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/footer.css">
    <?php get_css(['sidebar','suporte_ao_colaborador','base', 'style']) ?>
    <title>Eao Quadrado</title>
</head>
 
<body>
    <?php get_header() ?>
 
    <main>
    <div class="roadmap">Home / Painel do Administrador / Suporte ao Colaborador</div>
                <div class="container-geral">
                    <?php get_sidebar_admin('suporte_colaborador') ?>
                
                    
                    <div class="chamados">
                            <h1 >Chamados:</h1>
                            <button id="selected">Todas</button>
                            <button>Não Lidas</button>
                            <button>Respondidas</button>
                    </div>
                        
                    <div class="container-accordion">
    
                        <div class="accordion" id="Viewed">
                            <div class="table">
                                <img src="<?php get_base_url() ?>assets/img/foto-perfil.png" alt="Imagem do Produto">
                                <div class="user-info">
                                    <button id="nome" onclick="toggleAccordion(this)">Fernando Abreu</button>
                                    <p id="texto">venho relatar um bug na minha conta na...</p>
                                    <p id="data">30 de junho, 2024</p>
                                    <p id="status">Visto</p>
                                </div>
                            </div>
                            <div class="accordion-content" id="nonViewd">
                                <hr>
                                <p>Venho relatar um bug na minha conta na página inicial do sistema. Ao tentar acessar minha área de usuário, percebo que a página demora muito para carregar, ou, em alguns casos, fica totalmente em branco.</p>
                                <div class="buttons-container">
                                    <label class="file-container">
                                        <input type="file" class="file-input">
                                        <span class="file-label">
                                            <img src="<?php get_base_url() ?>assets/img/image_icon.png" alt="Ícone de Upload">
                                            <a>Carregar Imagem</a>
                                        </span>
                                    </label>
                                    
                                        <button class="submit-button" id="submitId">
                                            <a href="#">
                                            <img src="<?php get_base_url() ?>src/assets/img/send_icon2.png" alt="Ícone de Envio">
                                            <a>Responder</a>
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
    
                        <div class="accordion">
                            <div class="table">
                                <img src="<?php get_base_url() ?>assets/img/foto-perfil.png" alt="Imagem do Produto">
                                <div class="user-info">
                                    <button id="nome" onclick="toggleAccordion(this)">Matheus Aguiar</button>
                                    <p id="texto">Estou enfrentando alguns problemas com...</p>
                                    <p id="data">31 de maio, 2024</p>
                                    <p id="status">Não Visto</p>
                                </div>
                            </div>
                            <div class="accordion-content">
                                <hr>
                                <p>Estou enfrentando alguns problemas com a página de cadastros de Produtos, eu preencho as informações, mas na hora de salvar as informações colocadas não salvam. Segue com alguns prints da minha tela mostrando o problema, aguardo respostas...</p>
                                <div class="buttons-container">
                                    <label class="file-container">
                                        <input type="file" class="file-input">
                                        <span class="file-label">
                                            <img src="<?php get_base_url() ?>assets/img/image_icon.png" alt="Ícone de Upload">
                                            <a>Carregar Imagem</a>
                                        </span>
                                    </label>
                                    
                                        <button class="submit-button" id="submitId">
                                            <a href="#">
                                            <img src="<?php get_base_url() ?>assets/img/send_icon2.png" alt="Ícone de Envio">
                                            <a>Responder</a>
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                    </div>
        
                </div>
            </div>
    </main>
    <?php get_footer() ?>
</body>
<script src="<?php get_base_url() ?>assets/js/colaborador_sub.js"></script>
</html>