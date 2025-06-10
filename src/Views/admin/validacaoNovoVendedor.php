<?php
$appName = get_app_name();
$baseUrl = get_base_url();
$titulo = 'Novo Vendedor';
?>
<?php
$base_url = get_base_url();
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../assets/css/footer.css">
  <?php get_css(['ValidacaoNovoVendedor', 'base', 'style']) ?>
  <title>E ao quadrado - Validar novo Vendedor</title>
</head>

<body>
  <?php get_header() ?>

  <main>

    <roadMap class='roadMap'>
      <a href="<?= $base_url; ?>src/index.php" class='roadMap1'>Home /</a>
      <a href="#" class='roadMap1'>Painel do Administrador /</a>
      <a class='roadMap2 redutor'>Validação de novos colaboradores</a>
    </roadMap>

    <div class='corpo'>

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

      <div class='subCorpo'>

        <div class='subSubCorpo'>
          <h4 class='redutor'>Validação novo Vendedor</h4>

          <div class='painel'>

            <div class='vendedor'>

              <button class='abrirAcordeon' type="button" onclick="abrirAcordeon(0)"></button>
              <div class='acordeonFechado'>
                <div class='bloco1'><img src="<?= $base_url; ?>assets/img/logoEmpresaRica.jpg" class='logoEmpresa'>
                  <div class='blocoTitulo'>
                    <p class='tituloLoja'>Nome da loja</p>
                    <div><img src='<?= $base_url; ?>assets/img/Group.png' class='iconLoja'> Loja 1</div>
                  </div>
                </div>
                <div class='blocoAcordeon'>
                  <button class='abrirAcordeon' type="button" onclick="abrirAcordeon(0)"><img src="<?= $base_url; ?>assets/img/fakepngCarret-fotor-bg-remover-202504029435.png" alt="carret" class='carret'></button>
                </div>
              </div>
              <div class='acordeonAberto'>

                <div class='acordeonAberto1'>
                  <div class='bloco1'><img src="<?= $base_url; ?>assets/img/logoEmpresaRica.jpg" class='logoEmpresa'>
                    <div class='blocoTitulo'><button style="border: 0px;background-color:rgb(0,0,0,0);" type='button' onclick='fecharAcordeon(0)'><span class='tituloLoja'>Nome da loja</span></button></div>
                  </div>
                </div>

                <div class='acordeonAberto2'>
                  <div class='miniPainel mini1'>
                    <div class='internalMini1'>

                      <line class = 'linha'>
                        <p class='redutor margem4'>Responsável: </p>
                        <p class='redutor'> Carlos</p>
                      </line>
                      <line class = 'linha'>
                        <p class='redutor margem4'>Telefone: </p>
                        <p class='redutor'> (67) 3437-7000</p>
                      </line>
                      <line class = 'linha'>
                        <p class='redutor margem4'>CNPJ: </p>
                        <p class='redutor'> 97.538.333/0001-00</p>
                      </line>
                      <line class = 'linha'>
                        <p class='redutor margem4'>CEP: </p>
                        <p class='redutor'> 79000-00</p>
                      </line>
                      <p class='redutor margem4'>E-Mail: </p>
                      <p class='redutor'> studiocenterpy@gmail.com</p>

                    </div>
                    <div>
                      <line class='linhaCinza'><img src='<?= $base_url; ?>assets/img/camisaIcon.svg' class='icon'><span class='iconText'> Roupas</span></line>
                      <line class='linhaCinza'><img src='<?= $base_url; ?>assets/img/cameraIcon.svg' class='icon'><span class='iconText'> Câmeras</span></line>
                      <line class='linhaCinza'><img src='<?= $base_url; ?>assets/img/celularIcon.svg' class='icon'><span class='iconText'> Smartphones</span></line>
                      <line class='linhaCinza'><img src='<?= $base_url; ?>assets/img/computadorIcon.svg' class='icon'><span class='iconText'> Computadores</span></line>
                      <line class='linhaCinza linhaCinzaBase'><img src='<?= $base_url; ?>assets/img/ferramentasIcon.svg' class='icon'><span class='iconText'> Ferramentas</span></line>
                    </div>
                  </div>
                  <div class='miniPainel mini2'>
                    <div class='painelImagem'>

                      <img src="<?= $base_url; ?>assets/img/gucci_bolsa_intense.png" alt="produto" class="imagemPainel">

                    </div>
                  </div>
                </div>
                <div class='acordeonAberto3'>
                  <div class='centralizadorVertical'>
                    <div class='painelCarrocel'>

                      <button class='imagemBotao'><img src="<?= $base_url; ?>assets/img/gucci_bolsa_intense.png" alt="" class='imagemCarrocel'></button>
                      <button class='imagemBotao'><img src="<?= $base_url; ?>assets/img/gucci_bolsa_intense.png" alt="" class='imagemCarrocel'></button>
                      <button class='imagemBotao'><img src="<?= $base_url; ?>assets/img/gucci_bolsa_intense.png" alt="" class='imagemCarrocel'></button>
                      <button class='imagemBotao'><img src="<?= $base_url; ?>assets/img/gucci_bolsa_intense.png" alt="" class='imagemCarrocel'></button>
                      <button class='imagemBotao'><img src="<?= $base_url; ?>assets/img/gucci_bolsa_intense.png" alt="" class='imagemCarrocel'></button>
                      <button class='imagemBotao'><img src="<?= $base_url; ?>assets/img/gucci_bolsa_intense.png" alt="" class='imagemCarrocel'></button>
                      <button class='imagemBotao'><img src="<?= $base_url; ?>assets/img/gucci_bolsa_intense.png" alt="" class='imagemCarrocel'></button>
                      <button class='imagemBotao'><img src="<?= $base_url; ?>assets/img/gucci_bolsa_intense.png" alt="" class='imagemCarrocel'></button>
                      <button class='imagemBotao'><img src="<?= $base_url; ?>assets/img/gucci_bolsa_intense.png" alt="" class='imagemCarrocel'></button>
                      <button class='imagemBotao'><img src="<?= $base_url; ?>assets/img/gucci_bolsa_intense.png" alt="" class='imagemCarrocel'></button>
                      <button class='imagemBotao'><img src="<?= $base_url; ?>assets/img/gucci_bolsa_intense.png" alt="" class='imagemCarrocel'></button>
                      <button class='imagemBotao'><img src="<?= $base_url; ?>assets/img/gucci_bolsa_intense.png" alt="" class='imagemCarrocel'></button>


                    </div>
                  </div>
                </div>
                <div class='acordeonAberto4'>

                  <div class='blocoFinal'>
                    <h4 class='redutor'>Observações:</h4>
                    <div><textarea name="Observações" id="observacoes" cols="30" rows="6" class='painelObservacoes' placeholder="Observações:"></textarea></div>
                    <div class='linhaBT'>
                      <button class="btPadrao verde">
                        Aprovar
                      </button>
                      <button class="btPadrao vermelho">
                        Reprovar
                      </button>
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

</html>

<script src='<?= $base_url; ?>assets/js/adm/validacaoNovoVendedor/funcoesAcordeon.js'></script>