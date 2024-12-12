<?php

try {
    $con = new mysqli($_ENV['HOST'], $_ENV['USERNAME'], $_ENV['PASSWORD'], $_ENV['DATABASE']);
} catch (\Throwable $th) {
    echo $th;
    exit;
}