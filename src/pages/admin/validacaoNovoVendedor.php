<?php
require_once('../../config/funcoes.php');
require('../../config/conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-BR">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/footer.css">
    <?php get_css(['ValidacaoNovoVendedor','base', 'style']) ?>
    <title>Eao Quadrado</title>
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
                 <div class = 'vendedor'><img src="../../../src/assets/img/logoEmpresaRica.jpg" class = 'logoEmpresa'><br><br><br></div>
                </div></div>
            
            </div>
        
        </div>
                
    </main>
    <?php get_footer() ?>
</body>
</html>