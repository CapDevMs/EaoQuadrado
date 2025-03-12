<?php

require_once('database-config.php');


try {
    $con = new mysqli($host, $username, $password, $database);
} catch (\Throwable $th) {
    echo $th;
    exit;
}