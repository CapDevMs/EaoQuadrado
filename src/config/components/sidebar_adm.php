<ul class="menu-sidebar col-sm-3 col-xl-2">
    <li>
        <input type="checkbox" id="item1">
        <label for="item1">Cadastro</label>
        <div class="content">
            <a href="<?= get_base_url(); ?>pages/admin/cadastro_adm.php">Cadastrar Novo Administrador</a>
            <a href="<?= get_base_url(); ?>pages/admin/meu_perfil_adm.php">Gerenciar Meu Perfil</a>
        </div>
    </li>

    <li>
        <input type="checkbox" id="item2">
        <label for="item2">Colaboradores</label>
        <div class="content">
            <a href="<?= get_base_url(); ?>pages/admin/validacaoNovoVendedor.php" class="<?= $page == 'validacao_colaborador' ? 'ativo' : '' ?>">Validar Novo Colaborador</a>
            <a href="<?= get_base_url(); ?>views/admin/contas_aprovadas_reprovadas " class="<?= $page == 'contas_aprovadas_reprovadas' ? 'ativo' : '' ?>">histórico de Contas</a>
            <a href="<?= get_base_url(); ?>#" class="<?= $page == '#' ? 'ativo' : '' ?>">Listar Colaboradores Ativos</a>
            <a href="<?= get_base_url(); ?>pages/admin/suporte_ao_colaborador" class="<?= $page == 'suporte_ao_colaborador' ? 'ativo' : '' ?>">Suporte ao Colaborador</a>
        </div>
    </li>

    <li>
        <input type="checkbox" id="item3">
        <label for="item3">Clientes</label>
        <div class="content">
            <a href="<?= get_base_url(); ?>#" class="<?= $page == '#' ? 'ativo' : '' ?>">Suporte ao Cliente</a>
        </div>
    </li>

    <li>
        <input type="checkbox" id="item4">
        <label for="item4">Sistema</label>
        <div class="content">
            <a href="<?= get_base_url(); ?>#" class="<?= $page == '#' ? 'ativo' : '' ?>">Abrir Chamado</a>
            <a href="<?= get_base_url(); ?>pages/admin/criar_categoria.php" class="<?= $page == 'criar_categoria' ? 'ativo' : '' ?>">Criar Categoria</a>
        </div>
    </li>
</ul>
