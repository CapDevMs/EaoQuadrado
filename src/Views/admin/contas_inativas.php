<?php
$appName = get_app_name();
$titulo = 'EaoQuadrado - Contas Inativas';
?>

<?php
$base_url = get_base_url();
?>
<?= $base_url; ?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $appName . ' - ' . $titulo ?? '' ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <?php get_css(['style', 'base', 'admin/contas_inativas', 'sidebar']) ?>

</head>

<body>
    <?php
    get_header();
    ?>

    <main>

        <roadMap class='mt-1 mb-1 ml-1 roadMap'>
            <a href="<?= get_base_url(); ?>" class='roadMap1'>Home /</a>
            <a href="<?= get_base_url(); ?>admin/indexAdm" class='roadMap1'>Painel do administrador /</a>
            <a href="#" class='roadMap2'>Contas inativas</a>
        </roadMap>
        <corpo class='corpo col-12 row'>
            <menuLateral class='col-md-3 col'>
                <?php get_sidebar_admin('contas_inativas'); ?>
            </menuLateral>
            <conteudo class='col-md-9 col-12'>

                <seletor class='seletor'>
                    <p class='miniFonte seletorBase'>Contas:</p>
                    <p type='button' onclick="mudarSeletor('seletor0',lista);" class='miniFonte seletorComponente seletorAtivo' id='seletor0'>Todas</p>
                    <p type='button' onclick="mudarSeletor('seletor1',listaSuspensas);" class='miniFonte seletorComponente seletorInativo' id='seletor1'>Suspensas</p>
                    <p type='button' onclick="mudarSeletor('seletor2',listaDesativadas);" class='miniFonte seletorComponente seletorInativo' id='seletor2'>Desativadas</p>
                </seletor>

                <painel class='painel painelPrincipal col-md-12'>
                </painel>
            </conteudo>
        </corpo>

    </main>
    <?php get_footer() ?>
</body>

<script>
    const lista = <?= json_encode($contasInativas) ?>;
    console.log('lista geral:')
    console.log(lista)
    const listaSuspensas = <?= json_encode($contasSuspensas) ?>;
    console.log('lista suspensas:')
    console.log(listaSuspensas)
    const listaDesativadas = <?= json_encode($contasDesativadas) ?>;
    console.log('lista desativadas:')
    console.log(listaDesativadas)
</script>
<script src='<?= get_base_url(); ?>assets/js/adm/contas_inativas.js'></script>
<!-- <script src='<?= get_base_url(); ?>assets/js/components/componente_contasInativas.js'></script> -->
<script>
    PuxarInativas(lista);
</script>

</html>