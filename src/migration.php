#!/usr/bin/env php
<?php

require __DIR__ . '/Core/Application.php';

Use Core\Application;
Use Core\Migration;

if (php_sapi_name() !== 'cli') {
    die("Só funciona via CLI\n");
}

$app = new Application();

$app->bootstrap();

$migration = new Migration();
$migration->execute();