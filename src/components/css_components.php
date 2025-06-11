<?php foreach ($css_files as $css_file): ?>
    <link rel="stylesheet" href="<?= get_base_url(); ?>assets/css/components/<?= $css_file ?>?<?= time()?>">
<?php endforeach; ?>