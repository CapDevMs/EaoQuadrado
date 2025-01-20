<?php
session_start();

require_once(__DIR__ .'/DotEnvEnvironment.php');

function get_base_url() {
    return $_ENV['APP_URL'];
}

function get_app_name(){
    return $_ENV['APP_NAME'];
}

function get_base_head() {
    include_once(__DIR__ . '/../components/head.php');
}

function get_header(){
    include_once(__DIR__ . '/../components/header.php');
}

function get_footer(){
    include_once(__DIR__ . '/../components/footer.php');
}

function get_css(array $telas = []){
    include_once(__DIR__ . '/../components/head_css.php');
}