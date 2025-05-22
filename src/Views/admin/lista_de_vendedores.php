<?php

?>
<?php
$base_url = get_base_url();
?>
<!DOCTYPE html>
<html lang="pt-BR">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <?php get_css(['sidebar','admin/lista_de_vendedores', 'cliente/pagina_vendedor','base', 'style']); ?>
    <title>Eao Quadrado</title>
</head>
 
<body>
    <?php get_header(); ?>
 
    <main>
    <div class="roadmap">Home / Painel do Administrador / Lista de Vendedores</div>

            <div class="all container row col-sm-12">
                <?php get_sidebar_admin('historico_de_contas')?>
                    
                <div class="lista-vendedor container col-sm-10 col-lg-8 ml-0 mb-1">

                    <listaVendedores></listaVendedores>

                </div>
    
            </div>
     </div>
    </main>
    <?php get_footer(); ?>
</body>
<script type="module" src="<?= get_base_url(); ?>/assets/js/adm/vendedores.js"></script>
</html>