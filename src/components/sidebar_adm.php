<ul class="menu-adm col-sm-3 col-xl-2">
    <li>
        <input type="checkbox" id="item1">
        <label for="item1">Cadastro</label>
        <div class="content">
            <a href="<?= get_base_url(); ?>/pages/admin/produto.php">Cadastrar Novo Administrador</a>
            <a href="<?= get_base_url(); ?>/pages/admin/meu_perfil_adm.php">Gerenciar Meu Perfil</a>
        </div>
    </li>

    <li>
        <input type="checkbox" id="item2">
        <label for="item2">Colaboradores</label>
        <div class="content">
            <a href="<?= get_base_url(); ?>/pages/admin/validacaoNovoVendedor.php">Validar Novo Colaborador</a>
            <a href="<?= get_base_url(); ?>#">Validar Novo Colaborador</a>
            <a href="<?= get_base_url(); ?>#">Colaboradores Aprovados</a>
            <a href="<?= get_base_url(); ?>#">Colaboradores Reprovados</a>
            <a id="pagina_atual" href="<?= get_base_url(); ?>#">Listar Colaboradores Ativos</a>
            <a href="<?= get_base_url(); ?>/pages/admin/suporte_ao_colaborador">Suporte ao Colaborador</a>
        </div>
    </li>

    <li>
        <input type="checkbox" id="item3">
        <label for="item3">Clientes</label>
        <div class="content">
            <a href="<?= get_base_url(); ?>#"> Suporte ao Cliente</a>
        </div>
    </li>

    <li>
        <input type="checkbox" id="item4">
        <label for="item4">Sistema</label>
        <div class="content">
            <a href="<?= get_base_url(); ?>#">Abrir Chamado</a>
            <a href="<?= get_base_url(); ?>/pages/admin/criar_categoria.php">Criar Categoria</a>
        </div>
    </li>
</ul>