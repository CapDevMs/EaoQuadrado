<?php

spl_autoload_register(function($className) {

    $paths = [
        join(DIRECTORY_SEPARATOR, array(__DIR__, '..', 'App', 'Controllers')),
        join(DIRECTORY_SEPARATOR, array(__DIR__, '..', 'App', 'Models')),
        join(DIRECTORY_SEPARATOR, array(__DIR__, '..', 'App', 'helpers')),
        join(DIRECTORY_SEPARATOR, array(__DIR__, '..', 'Core')),
    ];

    foreach ($paths as $path) {
        $file = $path . $className . '.php';
        if (file_exists($file)) {
            require_once $file;
            return;
        }
    }
});