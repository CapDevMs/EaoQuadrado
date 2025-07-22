<?php
$appName = get_app_name();
$baseUrl = get_base_url();
$titulo = 'Histórico de Pedidos';

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php get_css(['sidebar', '/cliente/historicoPedidos', 'base', 'style']) ?>
    <title>E ao Quadrado - Histórico de pedidos</title>
</head>

<body>
    <?php get_header() ?>

    <main>
        <div class="container row col-sm-12">
        <div class="col-sm-3 hidden-div">
                <?php get_sidebar_cliente('cliente'); ?>
            </div>

            <section class="container row col-sm-12 col-md-9 pb-2 pt-2">
                <div class="col-sm-11 col-xl-9 pl-1">
                    <h2 class="col-sm-12">Histórico de Pedidos</h2>
                    <p class="col-sm-12">Aqui você pode ver todos os pedidos que já realizou.</p>
                <div>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID do Pedido</th>
                                <th>Data do Pedido</th>
                                <th>Status</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (isset($pedidos) && count($pedidos) > 0
                            ): ?>
                                <?php foreach ($pedidos as $pedido): ?>
                                    <tr>
                                        <td><?= $pedido['id'] ?></td>
                                        <td><?= date('d/m/Y H:i', strtotime($pedido['data'])) ?></td>
                                        <td><?= $pedido['status'] ?></td>
                                        <td>R$ <?= number_format($pedido['total'], 2, ',', '.') ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="4" class="text-center">Nenhum pedido encontrado.</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
                </div>
            </section>
        </div>
    </main>
    <?php get_footer() ?>

</body>

</html>