<ul class="menu-sidebar col-sm-3 col-xl-2">
    <li>
        <input type="checkbox" id="item1">
        <label for="item1">Gerenciar Minha Conta</label>
        <div class="content">
            <a href="<?= get_base_url(); ?>pages/vendedor/meu_perfil_vendedor.php" class="<?= $page == 'meu_perfil' ? 'ativo' : '' ?>">Meu Perfil</a>
            <a href="<?= get_base_url(); ?>pages/vendedor/minha_loja.php" class="<?= $page == 'minha_loja' ? 'ativo' : '' ?>">Minha Loja</a>
            <a href="<?= get_base_url(); ?>pages/vendedor/cadastrar_produto_vendedor.php" class="<?= $page == 'cadastrar_produtos' ? 'ativo' : '' ?>">Cadastrar Produtos</a>
        </div>
    </li>

    <li>
        <input type="checkbox" id="item2">
        <label for="item2">Vendas</label>
        <div class="content">
            <a href="<?= get_base_url(); ?>pages/vendedor/" class="<?= $page == 'historico_vendas' ? 'ativo' : '' ?>">Histórico de Vendas</a>
            <a href="<?= get_base_url(); ?>pages/vendedor/troca_devolucao_cancelamento.php" class="<?= $page == 'trocas_cancelamentos' ? 'ativo' : '' ?>">Trocas / Cancelamentos</a>
            <a href="<?= get_base_url(); ?>pages/vendedor/tela_gerenciamento_estoque.php" class="<?= $page == 'gerenciamento_estoque' ? 'ativo' : '' ?>">Gerenciamento de estoque</a>
        </div>
    </li>
</ul>
