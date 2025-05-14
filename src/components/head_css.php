<?php


?>
<link rel="shortcut icon" href="<?= get_base_url() ?>/assets/img/logo.png" type="image/png">
<link rel="stylesheet" href="<?= get_base_url() ?>/assets/css/style.css?<?= time()?>">
<link rel="stylesheet" href="<?= get_base_url() ?>/assets/css/base.css?<?= time()?>">
<?php foreach ($telas as $tela): ?>
    <link rel="stylesheet" href="<?= get_base_url() ?>assets/css/<?= $tela ?>.css?<?= time()?>">
<?php endforeach; ?>