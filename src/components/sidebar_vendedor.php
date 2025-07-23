<ul class="menu-sidebar col-sm-3 col-xl-2 mt-5">
    <li class= "mt-5">
        <label for="item1">Gerenciar Minha Conta</label>
        <div class="content">
            <!-- <a href="<?= get_base_url(); ?>#" class="<?= $page == 'meu_perfil' ? 'ativo' : '' ?>">Meu Perfil</a> -->
            <a href="<?= get_base_url(); ?>vendedor/minhaLoja" class="<?= $page == 'minha_loja' ? 'ativo' : '' ?>">Minha Loja</a>
            <a href="<?= get_base_url(); ?>vendedor/cadastroProduto" class="<?= $page == 'cadastrar_produtos' ? 'ativo' : '' ?>">Cadastrar Produtos</a>
        </div>
    </li>

    <!-- <li>
        <label for="item2">Vendas</label>
        <div class="content">
            <a href="<?= get_base_url(); ?>vendas" class="<?= $page == 'historico_vendas' ? 'ativo' : '' ?>">Histórico de Vendas</a>
            <a href="<?= get_base_url(); ?>#" class="<?= $page == 'trocas_cancelamentos' ? 'ativo' : '' ?>">Trocas / Cancelamentos</a>
            <a href="<?= get_base_url(); ?>#" class="<?= $page == 'gerenciamento_estoque' ? 'ativo' : '' ?>">Gerenciamento de estoque</a>
        </div>
    </li> -->
</ul>
