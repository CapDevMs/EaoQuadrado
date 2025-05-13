<?php

use Core\Application;

// Registramos o autoload com as classes que usaremos...
//require __DIR__.'/../vendor/autoload.php';
require __DIR__ . '/../Core/Application.php';

// Inicia a aplicação
$app = new Application();
$app->bootstrap();
$app->run();
