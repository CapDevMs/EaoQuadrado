<?php

spl_autoload_register(function ($class) {
    $class = str_replace('\\', '/', $class);
    $file = BASE_PROJECT . $class . '.php';

    if (file_exists($file)) {
        require_once $file;
    }
});
