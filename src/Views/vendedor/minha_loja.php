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
    <?php get_css(['sidebar','vendedor/minha_loja', 'style', 'base']) ?>
</head>
<body>
    <?php get_header() ?>

    <main class="row">
        <asside class="col-md-3 col-sm-hidden">
            
            <?php get_sidebar_vendedor('minha_loja'); ?>
            
        </asside> 

        <section class="col-md-9 col-sm-12">
            <div class="container">
            <h1 class="title ptb-1 pb-5">Edite Sua Loja</h1> 
                
                <div class="row">
                    <div class="col-12 pb-3">
                        <img src="../../assets/img/Banner_loja.png" class="img" alt="Banner da Loja"> 
                    </div>
                </div>

                <form class="form" method="post" action="">
                    <div class="row">
                            <div class="col-6 col-sm-12 pb-1">
                            <label>Nome da Loja</label> 
                            <input name="" class="input" type="text" value="Estudio Center"> 
                        </div>
                        <div class="col-6 col-sm-12 pb-1">
                            <label>Telefone</label> 
                            <input name="" class="input" type="text" value="(67) 992346578"> 
                        </div>
                        
                        <div class="col-6 col-sm-12 pb-1">
                            <label>E-mail</label> 
                            <input name="" class="input" type="email" value="studio@gmail.com"> 
                        </div>
                        <div class="col-6 col-sm-12 pb-1">
                            <label>Endereço</label> 
                            <input name="" class="input" type="text" value="Av. 15 de agosto, 506"> 
                        </div>
                        
                        <div class="col-6 col-sm-12 pb-1">
                            <label>CEP</label> 
                            <input name="" class="input" type="text" value="79113560"> 
                        </div>
                        <div class="col-6 col-sm-12 pb-1">
                            <label>Número</label> 
                            <input name="" class="input" type="text" value="506"> 
                        </div>
                        
                        <div class="col-6 col-sm-12 pb-1">
                            <div class="row">
                                <div class="col-6 form-check">
                                    <label>
                                        <input class="form-check-input" type="radio" name="document" checked> CPF 
                                    </label>
                                </div>
                                <div class="col-6 form-check">
                                    <label>
                                        <input type="radio" class="form-check-input" name="document"> CNPJ 
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <input name="" class="input" type="text" placeholder="000.000.000-00">
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row pb-3 float-end">
                        <div class="col-3 col-sm-6">
                            <button type="button" class="btn-cancel">Cancelar</button>
                        </div>
                        <div class="col-3 col-sm-6">
                            <button class="btn-save">Salvar Mudanças</button> 
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </main>

    <?php get_footer() ?>
</body>
<script src="../../assets/js/script.js"></script>
</html>