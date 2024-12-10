<?php
include('../config/funcoes.php');


?>
<link rel="stylesheet" href="<?= get_base_url() ?>/assets/css/style.css">
<link rel="stylesheet" href="<?= get_base_url() ?>/assets/css/base.css">
<?php foreach ($telas as $tela): ?>
    <link rel="stylesheet" href="<?= get_base_url() ?>/assets/css/<?= $tela ?>.css">
<?php endforeach; ?>