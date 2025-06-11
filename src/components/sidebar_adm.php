<ul class="menu-sidebar col-sm-3 col-xl-2">
    <li>
        <label for="item1">Cadastro</label>
        <div class="content">
            <a href="<?= get_base_url(); ?>pages/admin/cadastro_adm.php">Cadastrar Novo Administrador</a>
            <a href="<?= get_base_url(); ?>perfilAdm">Gerenciar Meu Perfil</a>
        </div>
    </li>

    <li>
        <label for="item2">Colaboradores</label>
        <div class="content">
            <a href="<?= get_base_url(); ?>#" class="<?= $page == 'validacao_colaborador' ? 'ativo' : '' ?>">Validar Novo Colaborador</a>
            <a href="<?= get_base_url(); ?>#" class="<?= $page == 'contas_aprovadas_reprovadas' ? 'ativo' : '' ?>">histórico de Contas</a>
            <a href="<?= get_base_url(); ?>#" class="<?= $page == '#' ? 'ativo' : '' ?>">Listar Colaboradores Ativos</a>
            <a href="<?= get_base_url(); ?>suporte_ao_colaborador" class="<?= $page == 'suporte_ao_colaborador' ? 'ativo' : '' ?>">Suporte ao Colaborador</a>
        </div>
    </li>

    <li>
        <label for="item3">Clientes</label>
        <div class="content">
            <a href="<?= get_base_url(); ?>#" class="<?= $page == '#' ? 'ativo' : '' ?>">Suporte ao Cliente</a>
        </div>
    </li>

    <li>
        <label for="item4">Sistema</label>
        <div class="content">
            <a href="<?= get_base_url(); ?>#" class="<?= $page == '#' ? 'ativo' : '' ?>">Abrir Chamado</a>
            <a href="<?= get_base_url(); ?>#" class="<?= $page == 'criar_categoria' ? 'ativo' : '' ?>">Criar Categoria</a>
        </div>
    </li>
</ul>
