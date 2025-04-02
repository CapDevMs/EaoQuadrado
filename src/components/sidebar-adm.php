<div class="container">
    <div class="pb-2">
        <h2 class="menu-lateral">Cadastro</h2>
        <h2 class="barra_lateral">
            <a href="<?= get_base_url(); ?>/pages/administrador/cadastrar_novo_administrador.php" class="<?= $page == 'cadastrar_novo_administrador' ? 'ativo' : '' ?>">Cadastrar Novo Administrador</a>
        </h2>
        <h2 class="barra_lateral">
            <a href="<?= get_base_url(); ?>/pages/administrador/gerenciar_meu_perfil.php" class="<?= $page == 'gerenciar_meu_perfil' ? 'ativo' : '' ?>">Gerenciar Meu Perfil</a>
        </h2>
    </div>
    <div class="pb-2">
        <h2 class="menu-lateral">Colaboradores</h2>
        <h2 class="barra_lateral">
            <a href="<?= get_base_url(); ?>/pages/administrador/validar_novo_colaborador.php" class="<?= $page == 'validar_novo_colaborador' ? 'ativo' : '' ?>">Validar Novo Colaborador</a>
        </h2>
        <h2 class="barra_lateral">
            <a href="<?= get_base_url(); ?>/pages/administrador/colaboradores_aprovados.php" class="<?= $page == 'colaboradores_aprovados' ? 'ativo' : '' ?>">Colaboradores Aprovados</a>
        </h2>
        <h2 class="barra_lateral">
            <a href="<?= get_base_url(); ?>/pages/administrador/colaboradores_reprovados.php" class="<?= $page == 'colaboradores_reprovados' ? 'ativo' : '' ?>">Colaboradores Reprovados</a>
        </h2>
        <h2 class="barra_lateral">
            <a href="<?= get_base_url(); ?>/pages/administrador/listar_colaboradores_ativos.php" class="<?= $page == 'listar_colaboradores_ativos' ? 'ativo' : '' ?>">Listar Colaboradores Ativos</a>
        </h2>
        <h2 class="barra_lateral">
            <a href="<?= get_base_url(); ?>/pages/administrador/suporte_ao_colaborador.php" class="<?= $page == 'suporte_ao_colaborador' ? 'ativo' : '' ?>">Suporte ao Colaborador</a>
        </h2>
    </div>
    <div class="pb-2">
        <h2 class="menu-lateral">Clientes</h2>
        <h2 class="barra_lateral">
            <a href="<?= get_base_url(); ?>/pages/administrador/suporte_ao_cliente.php" class="<?= $page == 'suporte_ao_cliente' ? 'ativo' : '' ?>">Suporte ao Cliente</a>
        </h2>
    </div>
    <div class="pb-2">
        <h2 class="menu-lateral">Sistema</h2>
        <h2 class="barra_lateral">
            <a href="<?= get_base_url(); ?>pages/admin/abertura-de-chamados.php" class="<?= $page == 'abrir_chamado' ? 'ativo' : '' ?>">Abrir Chamado</a>
        </h2>
        <h2 class="barra_lateral">
            <a href="<?= get_base_url(); ?>/pages/administrador/criar_categoria.php" class="<?= $page == 'criar_categoria' ? 'ativo' : '' ?>">Criar Categoria</a>
        </h2>
        <h2 class="barra_lateral">
            <a href="<?= get_base_url(); ?>/pages/administrador/editar_sistema.php" class="<?= $page == 'editar_sistema' ? 'ativo' : '' ?>">Editar Sistema</a>
        </h2>
    </div>
</div>
