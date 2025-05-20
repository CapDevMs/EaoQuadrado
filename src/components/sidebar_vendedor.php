<ul class="menu-sidebar col-sm-3 col-xl-2">
    <li>
        <input type="checkbox" id="item1">
        <label for="item1">Gerenciar Minha Conta</label>
        <div class="content">
            <a href="<?= get_base_url(); ?>/pages/vendedor/meu_perfil_vendedor.php" class="<?= $page == 'meu_perfil' ? 'ativo' : '' ?>">Meu Perfil</a>
            <a href="<?= get_base_url(); ?>/pages/vendedor/minha_loja.php" class="<?= $page == 'minha_loja' ? 'ativo' : '' ?>">Minha Loja</a>
            <a href="<?= get_base_url(); ?>/pages/vendedor/cadastrar_produto_vendedor.php" class="<?= $page == 'cadastrar_produtos' ? 'ativo' : '' ?>">Cadastrar Produtos</a>
        </h2>
    </div>
    <div class="pb-2">
        <h2 class="menu-lateral">Vendas</h2>
        <h2 class="barra_lateral">
            <a href="<?= get_base_url(); ?>/pages/vendedor/" class="<?= $page == 'historico_vendas' ? 'ativo' : '' ?>">Histórico de Vendas</a>
        </h2>
        <h2 class="barra_lateral">
            <a href="<?= get_base_url(); ?>/pages/vendedor/troca_devolucao_cancelamento.php" class="<?= $page == 'trocas_cancelamentos' ? 'ativo' : '' ?>">Trocas / Cancelamentos</a>
            <a href="<?= get_base_url(); ?>/pages/vendedor/tela_gerenciamento_estoque.php" class="<?= $page == 'gerenciamento_estoque' ? 'ativo' : '' ?>">Gerenciamento de estoque</a>
        </div>
    </li>
</ul>
