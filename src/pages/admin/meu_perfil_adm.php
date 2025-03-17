<?php
    include('../../config/funcoes.php');
    $appName = get_app_name();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Perfil</title>
    <?php get_css(['admin/meu_perfil_adm']) ?>
    <?php get_css_components() ?>
</head>
<body>
    <?php get_header(); ?>
    <main>
        <div class="container-info">
            <div class='frame-direita'>
                <inserir_dados></inserir_dados>
            </div>
            <div class='frame-esquerda'>
                 <img src="../../assets/img/foto_cliente.png" alt="foto do cliente">
                 <permissoesAdm></permissoesAdm>
            </div>

        </div>
    </main>
    
    <?php get_footer(); ?>    
    
</body>
<script type="module" src="../../assets/js/meu_perfil_adm.js?<?= time() ?>"></script>
</html>