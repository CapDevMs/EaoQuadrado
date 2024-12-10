<?php

function get_base_url() {
    return $_ENV['APP_URL'];
}

function get_header(){
    include_once('../../components/header.html');
}

function get_footer(){
    include_once('../../components/footer.html');
}

function get_css(array $telas){
    include_once('../../components/head_css.php');
}