<?php
$appName = get_app_name();
$baseUrl = get_base_url();
$titulo = 'Histórico de Pedidos';

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
            <conteudo class="listaa">
                <div>
                    <h2 class='redutor preto'>Histórico</h2>
                </div>
                <div>
                    <div class='produto row colum490'>
                        <div class='grandeBloco1 col-sm-12 col-lg-3 centralizar col-3'>
                            <img class='col-lg-8 imagem' src="<?= get_base_url(); ?>assets/img/acer_nitro.png">
                        </div>
                        <div class='grandeBloco2 col-sm-12 col-lg-9 row column'>
                            <div class='col-lg-6 row col-12'>
                                <div class='col-sm-6 blocoMedio'>
                                    <h4 class='redutor central redutorFonte'>Nome</h4>
                                    <p class='redutor central2 redutorFonte'>Acer nitro V5</p>
                                </div>
                                <div class='col-sm-6'>
                                    <h4 class='redutor central titulo redutorFonte'>Data de compra</h4>
                                    <p class='redutor central2 redutorFonte'>18/12/2006</p>
                                </div>
                            </div>
                            <div class='col-lg-6 row col-sm-12'>
                                <div class='col-lg-6 col-6 rows'>
                                    <h4 class='redutor central rows redutorFonte'>Preço</h4>
                                    <p class='redutor central2 rows redutorFonte'>R$ 4650,90</p>
                                </div>
                                <div class='col-lg-6 col-6 rows'>
                                    <h4 class='redutor central rows redutorFonte'>Status</h4>
                                    <p class='redutor central2 rows redutorFonte'>Cancelado</p>
                                </div>
                            </div>
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