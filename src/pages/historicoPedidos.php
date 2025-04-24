<?php
include('../config/funcoes.php');
$appName = get_app_name();
?>
<?php
$base_url = get_base_url();
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php get_css(['base', 'style', '/cliente/historicoPedidos']) ?>
    <title>E ao Quadrado - Histórico de pedidos</title>
</head>

<body>
    <?php get_header() ?>
    <main>
        <roadMap class='roadMap'><a class='roadMap1'>Home /</a><a class='roadMap1'>Meu Perfil /</a><a>Historico de pedidos</a></roadMap>
        <corpoPrincipal class='corpoPrincipal'>
            <menuLateral class='redutor300'>
                <div class='menuLateral'>
                    <h3 class='redutor'>Cadastro</h3>
                    <a class='roadMap1'>Cadastrar novo Administrador</a>
                    <a class='roadMap1'>Gerenciar meu perfil</a>
                    <h3 class='redutor'>Colaboradores</h3>
                    <a class='roadMap1'>Validar novo colaborador</a>
                    <a class='roadMap1'>Colaboradores aprovados</a>
                    <a class='roadMap1'>Colaboradores Reprovados</a>
                    <a class='roadMap1'>Listar colaboradores ativos</a>
                    <a class='roadMap1'>Suporte ao colaborador</a>
                    <h3 class='redutor'>Clientes</h3>
                    <a class='roadMap1'>Suporte ao cliente</a>
                    <h3 class='redutor'>Sistema</h3>
                    <a class='roadMap1'>Abrir chamado</a>
                    <a class='roadMap1'>Criar categoria</a>
                    <a class='roadMap1'>Editar sistema</a>
                </div>
            </menuLateral>
            <conteudo class="lista">
                <div>
                    <h2 class='redutor preto'>Histórico</h2>
                </div>
                <div>
                    <div class='preto produto'>
                        <div class = 'grandeBloco1'>
                            <img src="../assets/img/acer_nitro.png">
                        </div>
                        <div class = 'grandeBloco2'>
                            <div class = ''></div>
                            <div class = ''></div>
                            <div class = ''></div>
                            <div class = ''></div>
                        </div>
                    </div>

                </div>

                </div>
            </conteudo>
        </corpoPrincipal>
    </main>
    <?php get_footer() ?>

</body>

</html>