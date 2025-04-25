<?php

if (!isset($_SESSION)) {
    session_start();
}

// Definimos a pasta base de todo o projeto
define('BASE_PROJECT', __DIR__ . DIRECTORY_SEPARATOR);

// Registramos o autoload com as classes que usaremos...
require __DIR__.'/vendor/autoload.php';
require __DIR__ . '/Routes/web.php';