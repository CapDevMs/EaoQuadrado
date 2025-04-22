<?php
require_once('../../config/funcoes.php');
require('../../config/conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-BR">
 
<>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/footer.css">
    <?php get_css(['admin/lista_de_vendedores','cliente/pagina_vendedor','base', 'style']) ?>
    <title>Eao Quadrado</title>
</head>
 
<body>
    <?php get_header() ?>
 
    <!-- col-9 col-md-5 -->
    <main>
    <div class="roadmap">Home / Painel do Administrador / Lista de Vendedores</div>

            <div class="all container row">
                <ul class="col-sm-2 ml-1">
                    <li>
                        <input type="checkbox" id="item1">
                        <label for="item1">Título 1</label>
                        <div class="content">
                            <p>Este é o parágrafo do item 1.</p>
                        </div>
                    </li>
                    <li>
                        <input type="checkbox" id="item2">
                        <label for="item2">Título 1</label>
                        <div class="content">
                            <p>Este é o parágrafo do item 2.</p>
                        </div>
                    </li>
                    <li>
                        <input type="checkbox" id="item3">
                        <label for="item3">Título 1</label>
                        <div class="content">
                            <p>Este é o parágrafo do item 3.</p>
                        </div>
                    </li>
                </ul>
                    
                <div class="lista-vendedor container col-sm-8">

                    <div class="col-sm-11 ml-3">
                        <div class="card-vend">
                            <div class="card-body">
                                <div class="container mtb-1">
                                    <div class="row">
                                        <div class="col-sm-10 col-md-2">
                                            <div class="avatar">
                                                <img src="<?= get_base_url(); ?>/assets/img/cliente/studio_center.svg" alt="" class="img-fluid">
                                            </div>
                                        </div>
                                        <div class="col-sm-10 col-md-6 col-lg-7 m-auto">
                                            <div class="col-sm-10">
                                                <h2>
                                                    Studio Center
                                                    <i class="fa-regular fa-heart icone"></i>
                                                </h2>
                                            </div>
                                            <div class="col-sm-10">
                                                <a href="mailto:studiocenterpy@gmail.com" class="text">studiocenterpy@gmail.com</a>
                                            </div>
                                            <div class="col-sm-10">
                                                <p class="text">Av. 15 de Agosto, 506, Centro</p>
                                                <p class="text">Campo Grande - MS</p>
                                            </div>
                                            <div class="col-md-hidden col-sm-12 pb-1"></div>
                                        </div>
                                        <div class="col-sm-10 col-md-4 col-lg-3 col-xl-2">
                                            <div class="row">
                                                <div class="col-sm-12 stars">
                                                    <p class="text">
                                                        Avaliações: 
                                                        <i class="fa fa-star icone-star"></i>
                                                        <i class="fa fa-star icone-star"></i>
                                                        <i class="fa fa-star icone-star"></i>
                                                        <i class="fa-regular fa-star icone-star"></i>
                                                        <i class="fa-regular fa-star icone-star"></i>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-10 pt-1 contato-container">
                                                    <img class="whatsapp" src="../assets/img/icons/whatsapp.svg" alt="">
                                                    <a target="_blank" class="contato" href="https://wa.me/556734377000">(67) 3437-7000</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-11 ml-3">
                        <div class="card-vend">
                            <div class="card-body">
                                <div class="container mtb-1">
                                    <div class="row">
                                        <div class="col-sm-10 col-md-2">
                                            <div class="avatar">
                                                <img src="<?= get_base_url(); ?>/assets/img/cliente/studio_center.svg" alt="" class="img-fluid">
                                            </div>
                                        </div>
                                        <div class="col-sm-10 col-md-6 col-lg-7 m-auto">
                                            <div class="col-sm-10">
                                                <h2>
                                                    Studio Center
                                                    <i class="fa-regular fa-heart icone"></i>
                                                </h2>
                                            </div>
                                            <div class="col-sm-10">
                                                <a href="mailto:studiocenterpy@gmail.com" class="text">studiocenterpy@gmail.com</a>
                                            </div>
                                            <div class="col-sm-10">
                                                <p class="text">Av. 15 de Agosto, 506, Centro</p>
                                                <p class="text">Campo Grande - MS</p>
                                            </div>
                                            <div class="col-md-hidden col-sm-12 pb-1"></div>
                                        </div>
                                        <div class="col-sm-10 col-md-4 col-lg-3 col-xl-2">
                                            <div class="row">
                                                <div class="col-sm-12 stars">
                                                    <p class="text">
                                                        Avaliações: 
                                                        <i class="fa fa-star icone-star"></i>
                                                        <i class="fa fa-star icone-star"></i>
                                                        <i class="fa fa-star icone-star"></i>
                                                        <i class="fa-regular fa-star icone-star"></i>
                                                        <i class="fa-regular fa-star icone-star"></i>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-10 pt-1 contato-container">
                                                    <img class="whatsapp" src="../assets/img/icons/whatsapp.svg" alt="">
                                                    <a target="_blank" class="contato" href="https://wa.me/556734377000">(67) 3437-7000</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                
                    
                </div>
    
            </div>
     </div>
    </main>
    <?php get_footer() ?>
</body>
<script src="script.js"></script>
</html>