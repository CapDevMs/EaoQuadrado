<div class="container">
    <div class="pb-2">
        <h2 class="menu-lateral">Gerenciar Minha Conta</h2>
        <h2 class="barra_lateral">
            <a href="<?= get_base_url(); ?>/pages/vendedor/meu_perfil_vendedor.php" class="<?= $page == 'meu_perfil' ? 'ativo' : '' ?>">Meu Perfil</a>
        </h2>
        <h2 class="barra_lateral">
            <a href="<?= get_base_url(); ?>/pages/vendedor/minha_loja.php" class="<?= $page == 'minha_loja' ? 'ativo' : '' ?>">Minha Loja</a>
        </h2>
        <h2 class="barra_lateral">
            <a href="<?= get_base_url(); ?>/pages/vendedor/cadastrar_produto_vendedor.php" class="<?= $page == 'cadastrar_produtos' ? 'ativo' : '' ?>">Cadastrar Produtos</a>
        </h2>
    </div>
</div>