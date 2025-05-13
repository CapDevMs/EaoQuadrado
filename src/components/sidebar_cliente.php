<ul class="menu-sidebar col-sm-3 col-xl-2">
    <li>
        <input type="checkbox" id="item1">
        <label for="item1">Gerenciar Minha Conta</label>
        <div class="content">
            <a href="<?= get_base_url(); ?>#" class="<?= $page == '#' ? 'ativo' : '' ?>">Meu Perfil</a>

        </div>
    </li>

    <li>
        <input type="checkbox" id="item2">
        <label for="item2">Meus Pedidos</label>
        <div class="content">
            <a href="<?= get_base_url(); ?>#" class="<?= $page == '#' ? 'ativo' : '' ?>">Histórico de Pedidos</a>
        </div>
    </li>
</ul>
