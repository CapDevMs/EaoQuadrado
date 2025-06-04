<?php

$appName = get_app_name();
$titulo = 'EaoQuadrado - Contas Inativas';
?>

<?php
$base_url = get_base_url();
?>
<!-- <?= $base_url; ?> -->
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
            <a href="#" class='roadMap1'>Home /</a>
            <a href="#" class='roadMap1'>Painel do administrador /</a>
            <a href="#" class='roadMap2'>Contas inativas</a>
        </roadMap>
        <corpo class='corpo col-12 row'>
            <menuLateral class='col-md-3 col'>

                <?php get_sidebar_admin('contas_inativas'); ?>
            </menuLateral>
            <conteudo class='col-md-9 col-12'>

                <seletor class = 'seletor'>
                    <p class = 'miniFonte seletorBase'>Contas:</p>
                    <p type = 'button' onclick="mudarSeletor('seletor0')" class = 'miniFonte seletorComponente seletorAtivo' id = 'seletor0'>Todas</p>
                    <p type = 'button' onclick="mudarSeletor('seletor1')" class = 'miniFonte seletorComponente seletorInativo' id = 'seletor1'>Suspensas</p>
                    <p type = 'button' onclick="mudarSeletor('seletor2')" class = 'miniFonte seletorComponente seletorInativo' id = 'seletor2'>Desativadas</p>
                </seletor>
                <painel class='painel painelPrincipal col-md-12'>

                    <acordeonSuspenso class='colum' id='acordeonSuspenso1'>
                        <AcordeonAberto type='button' class='painel painelCentral col-12 centralizar mt-3 acordeonAberto displayNone' onclick="fecharAcordeon('acordeonSuspenso1')">
                            <div class='painelCinza'>
                                <div class='blocoReativar subBloco0 col-md-2'>
                                    <img src="src/public/assets/img/foto-perfil.png" alt="foto-perfil" class='imagem'>
                                   </div>
                                <div class="blocoNome miniFonte subBloco1">Nome da empresa</div>

                                <div class='col-5  blocoColuna'>

                                    <div class="status1 col-xl-1 subBloco0 miniFonte blocoReativar">Suspenso</div>
                                    <div class='blocoReativar subBloco1'>
                                        <botaoReativar type='button' class="botao miniFonte">Reativar</botaoReativar>
                                    </div>

                                </div>

                            </div>
                            <hr>
                            <div class='campoTexto'>
                                <div class='TextBox miniFonte'>Justificativa: Grande quantidade de reclamações referente a entrega incorreta de produtos. Suspenso para revisão.</div>
                            </div>
                        </AcordeonAberto>

                        <AcordeonFechado type="button" class='painel painelCentral col-12 centralizar mt-3 acordeonFechado' onclick="abrirAcordeon('acordeonSuspenso1')">
                            <div class='painelCinza'>
                                <div class='blocoReativar subBloco0 col-md-2'>
                                    <img src="src/public/assets/img/foto-perfil.png" alt="foto-perfil" class='imagem'>
                                </div>
                                <div class=" blocoNome miniFonte subBloco1">Nome da empresa</div>

                                <div class='col-5 blocoColuna'>

                                    <div class="status1 col-xl-1 subBloco0 miniFonte blocoReativar">Suspenso</div>
                                    <div class='blocoReativar subBloco1'>
                                        <botaoReativar type='button' class="botao miniFonte">Reativar</botaoReativar>
                                    </div>

                                </div>
                            </div>

                            <hr>
                            <div class='campoTexto2'>
                                <div class='TextBox miniFonte'>Justificativa: Grande quantidade de reclamações referente a entrega incorreta de produtos. Suspenso para revisão.</div>
                            </div>
                        </AcordeonFechado>

                    </acordeonSuspenso>


                    <acordeonDesativado class='colum' id='acordeonDesativado2'>
                        <AcordeonAberto type='button' class='painel painelCentral col-12 centralizar mt-3 acordeonAberto displayNone' onclick="fecharAcordeon('acordeonDesativado2')">
                            <div class='painelCinza'>
                                <div class='blocoReativar subBloco0 col-md-2'>
                                    <img src="src/public/assets/img/foto-perfil.png" alt="foto-perfil" class='imagem'>
                                </div>
                                <div class="blocoNome miniFonte subBloco1">Nome da empresa</div>

                                <div class='col-5 blocoColuna'>

                                    <div class="status2 col-xl-1 subBloco0 miniFonte blocoReativar">Desativado</div>
                                    <div class='blocoReativar subBloco1'>
                                        <botaoReativar type='button' class="botao miniFonte">Reativar</botaoReativar>
                                    </div>

                                </div>

                            </div>
                            <hr>
                            <div class='campoTexto'>
                                <div class='TextBox miniFonte'>Justificativa: Grande quantidade de reclamações referente a entrega incorreta de produtos. Suspenso para revisão.</div>
                            </div>
                        </AcordeonAberto>

                        <AcordeonFechado type="button" class='painel painelCentral col-12 centralizar mt-3 acordeonFechado' onclick="abrirAcordeon('acordeonDesativado2')">
                            <div class='painelCinza'>
                                <div class='blocoReativar subBloco0 col-md-2'>
                                    <img src="src/public/assets/img/foto-perfil.png" alt="foto-perfil" class='imagem'>
                                </div>
                                <div class=" blocoNome miniFonte subBloco1">Nome da empresa</div>

                                <div class='col-5 blocoColuna'>

                                    <div class="status2 col-xl-1 subBloco0 miniFonte blocoReativar">Desativado</div>
                                    <div class='blocoReativar subBloco1'>
                                        <botaoReativar type='button' class="botao miniFonte">Reativar</botaoReativar>
                                    </div>

                                </div>
                            </div>

                            <hr>
                            <div class='campoTexto2'>
                                <div class='TextBox miniFonte'>Justificativa: Grande quantidade de reclamações referente a entrega incorreta de produtos. Suspenso para revisão.</div>
                            </div>
                        </AcordeonFechado>

                    </acordeonDesativado>




                </painel>
            </conteudo>
        </corpo>

    </main>
    <?php get_footer() ?>
</body>

<script src='<?php $base_url; ?>src/public/assets/js/contas_inativas.js'>

</script>

</html>