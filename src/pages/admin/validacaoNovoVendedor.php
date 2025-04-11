<?php
require_once('../../config/funcoes.php');
require('../../config/conexao.php');
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
    <?php get_css(['ValidacaoNovoVendedor','base', 'style']) ?>
    <title>E ao quadrado - Validar novo Vendedor</title>
</head>
 
<body>
    <?php get_header() ?>
 
    <main>
        
        <div class = 'roadMap'><span class = 'roadMap1'> Home / Painel do Administrador /</span><span class = 'roadMap2'>Validação de novos colaboradores</span></div>
    
        <div class = 'corpo'>

            <div class ='menuLateral'>
                <h3 class = 'redutor'>Cadastro</h3>
                <span class = 'roadMap1'>Cadastrar novo Administrador</span>
                <span class = 'roadMap1'>Gerenciar meu perfil</span>
                <h4 class = 'redutor'>Colaboradores</h4>
                <span class = 'roadMap1'>Validar novo colaborador</span>
                <span class = 'roadMap1'>Colaboradores aprovados</span>
                <span class = 'roadMap1'>Colaboradores Reprovados</span>
                <span class = 'roadMap1'>Listar colaboradores ativos</span>
                <span class = 'roadMap1'>Suporte ao colaborador</span>
                <h4 class ='redutor'>Clientes</h4>
                <span class = 'roadMap1'>Suporte ao cliente</span>
                <h4 class ='redutor'>Sistema</h4>
                <span class = 'roadMap1'>Abrir chamado</span>
                <span class = 'roadMap1'>Criar categoria</span>
                <span class = 'roadMap1'>Editar sistema</span>
            </div>
            
            <div class = 'subCorpo'>

            <div class = 'subSubCorpo'>
                <h4 class = 'redutor'>Validação novo Vendedor</h4>
        
                <div class = 'painel'>

                 <div class = 'vendedor' >

                    <div class = 'acordeonFechado'>
                        <div class = 'bloco1'><img src="<?=$base_url;?>/assets/img/logoEmpresaRica.jpg" class = 'logoEmpresa'>
                        <div class = 'blocoTitulo'>
                            <span style="font-size: 32px;" class = 'tituloLoja'>Nome da loja</span>
                            <div><img src = '<?=$base_url;?>/assets/img/Group.png' style="max-width: 12px; Margin-left:1%;"> Loja 2</div>
                        </div></div>
                        <div class = 'blocoAcordeon'>
                            <button class = 'abrirAcordeon' type="button" onclick="abrirAcordeon(0)"><img src="<?=$base_url;?>/assets/img/fakepngCarret-fotor-bg-remover-202504029435.png" alt="carret" class = 'carret'></button>
                        </div>
                    </div>
                    <div class = 'acordeonAberto'>
                        <div class = 'acordeonAberto1'>
                            <div class = 'bloco1'><img src="<?=$base_url;?>/assets/img/logoEmpresaRica.jpg" class = 'logoEmpresa'>
                            <div class = 'blocoTitulo'><button style="border: 0px;background-color:rgb(0,0,0,0);" type ='button' onclick = 'fecharAcordeon(0)'><span style="font-size: 32px;" class = 'tituloLoja'>Nome da loja</span></button></div>
                        </div>

                        <div class = 'acordeonAberto2' >
                            <div class = 'miniPainel mini1'>
                                <div style="margin:25px;">

                                    <line style="display: flex; justify-content:start;"><span class = 'redutor'>Responsável: </span><span class = 'redutor'>Carlos</span></line>
                                    <line style="display: flex; justify-content:start;"><span class = 'redutor'>Telefone: </span><span class = 'redutor'>(67) 3437-7000</span></line>
                                    <line style="display: flex; justify-content:start;"><span class = 'redutor'>CNPJ: </span><span class = 'redutor'>97.538.333/0001-00</span></line>
                                    <line style="display: flex; justify-content:start;"><span class = 'redutor'>CEP: </span><span class = 'redutor'>79000-00</span></line>
                                    <line style="display: flex; justify-content:start;"><span class = 'redutor'>E-Mail: </span><span class = 'redutor'>studiocenterpy@gmail.com</span></line>
                                    
                                </div>
                                <div style="margin:25px;">
                                    <line style="display: flex; justify-content:start;"><img src= '<?=$base_url;?>/assets/img/camisaIcon.svg' class = 'icon'><span class = 'iconText'> Roupas</span></line>
                                    <line style="display: flex; justify-content:start;"><img src= '<?=$base_url;?>/assets/img/cameraIcon.svg' class = 'icon'><span class = 'iconText'> Câmeras</span></line>
                                    <line style="display: flex; justify-content:start;"><img src= '<?=$base_url;?>/assets/img/celularIcon.svg' class = 'icon'><span class = 'iconText'> Smartphones</span></line>
                                    <line style="display: flex; justify-content:start;"><img src= '<?=$base_url;?>/assets/img/computadorIcon.svg' class = 'icon'><span class = 'iconText'> Computadores</span></line>
                                    <line style="display: flex; justify-content:start;"><img src= '<?=$base_url;?>/assets/img/ferramentasIcon.svg' class = 'icon'><span class = 'iconText'> Ferramentas</span></line>
                                </div>
                            </div>  
                            <div class = 'miniPainel mini2'>
                                <div class = 'painelImagem'>

                                    <img src="<?=$base_url;?>/assets/img/gucci_bolsa_intense.png" alt="produto" class="imagemPainel">
                                    
                                </div>
                            </div>  
                        </div>
                        <div class = 'acordeonAberto3'>
                            <div class = 'centralizadorVertical'>
                            <div class = 'painelCarrocel'>
                  
                              <button class = 'imagemBotao'><img src="<?=$base_url;?>/assets/img/gucci_bolsa_intense.png" alt="" class = 'imagemCarrocel'></button>
                              <button class = 'imagemBotao'><img src="<?=$base_url;?>/assets/img/gucci_bolsa_intense.png" alt="" class = 'imagemCarrocel'></button>
                              <button class = 'imagemBotao'><img src="<?=$base_url;?>/assets/img/gucci_bolsa_intense.png" alt="" class = 'imagemCarrocel'></button>
                              <button class = 'imagemBotao'><img src="<?=$base_url;?>/assets/img/gucci_bolsa_intense.png" alt="" class = 'imagemCarrocel'></button>
                              <button class = 'imagemBotao'><img src="<?=$base_url;?>/assets/img/gucci_bolsa_intense.png" alt="" class = 'imagemCarrocel'></button>
                              <button class = 'imagemBotao'><img src="<?=$base_url;?>/assets/img/gucci_bolsa_intense.png" alt="" class = 'imagemCarrocel'></button>
                              <button class = 'imagemBotao'><img src="<?=$base_url;?>/assets/img/gucci_bolsa_intense.png" alt="" class = 'imagemCarrocel'></button>
                              <button class = 'imagemBotao'><img src="<?=$base_url;?>/assets/img/gucci_bolsa_intense.png" alt="" class = 'imagemCarrocel'></button>
                              <button class = 'imagemBotao'><img src="<?=$base_url;?>/assets/img/gucci_bolsa_intense.png" alt="" class = 'imagemCarrocel'></button>
                              <button class = 'imagemBotao'><img src="<?=$base_url;?>/assets/img/gucci_bolsa_intense.png" alt="" class = 'imagemCarrocel'></button>
                              <button class = 'imagemBotao'><img src="<?=$base_url;?>/assets/img/gucci_bolsa_intense.png" alt="" class = 'imagemCarrocel'></button>
                              <button class = 'imagemBotao'><img src="<?=$base_url;?>/assets/img/gucci_bolsa_intense.png" alt="" class = 'imagemCarrocel'></button>
                         
                  
                            </div>
                            </div>
                        </div>
                        <div class = 'acordeonAberto4'>
                            
                        <div class = 'blocoFinal'>
                            <h4 class = 'redutor'>Observações:</h4>
                            <div><textarea name="Observações" id="observacoes" cols="30" rows="6" class = 'painelObservacoes' placeholder="Observações:"></textarea></div>
                            <div class = 'linha'>
                            <button class="btPadrao" style = "background-color:var(--cor-botao-primario);">
                                Reprovar
                            </button> 
                            <button class="btPadrao" style = "background-color:var(--cor-botao-adm-vermelho);">
                                Aprovar
                            </button>
                            </div>
                        </div>
                        </div>
                    </div>

                </div>

                </div></div>
            
            </div>
        
        </div>
                
    </main>
    <?php get_footer() ?>
</body>
</html>

<script>
    function abrirAcordeon(buttonID){
        console.log(buttonID);
        const elementos = document.querySelectorAll('.vendedor');
        console.log(elementos);
        const elemento = elementos[buttonID];
        console.log(elemento)
        const elementoSelecionado1 = elemento.querySelector('.acordeonFechado');
        const elementoSelecionado2 = elemento.querySelector('.acordeonAberto');
        console.log(elementoSelecionado1)
        console.log(elementoSelecionado2)

        elementoSelecionado1.classList.add('removedor')
        elementoSelecionado2.classList.add('adicionador')
    }

    function fecharAcordeon(buttonID){
        console.log(buttonID);
        const elementos = document.querySelectorAll('.vendedor');
        console.log(elementos);
        const elemento = elementos[buttonID];
        console.log(elemento)
        const elementoSelecionado1 = elemento.querySelector('.acordeonFechado');
        const elementoSelecionado2 = elemento.querySelector('.acordeonAberto');
        console.log(elementoSelecionado1)
        console.log(elementoSelecionado2)

        elementoSelecionado1.classList.remove('removedor')
        elementoSelecionado2.classList.add('removedor')
        elementoSelecionado2.classList.remove('adicionador')
    }
</script>