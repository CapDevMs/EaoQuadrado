<?php


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

function get_css_components() {
    $arquivos = scandir(BASE_PROJECT . '/public/assets/css/components/');
    $css_files = [];

    foreach ($arquivos as $arquivo) {

        if ($arquivo == "." || $arquivo == "..") continue;

        array_push($css_files, $arquivo);
    }

    if(!empty($css_files)){
        include_once(__DIR__ . '/../components/css_components.php');
    }
}

function get_sidebar_vendedor($page) {
    include_once(__DIR__ . '/../components/sidebar.php');
}

<<<<<<< HEAD

function get_sidebar_adm($page) {
    include_once(__DIR__ . '/../components/sidebar-adm.php');
=======
function route($route = '/') {
    if (!empty($_ENV['PREFIX'])){
        $route = $_ENV['PREFIX'] . $route;
    }
    header('location: ' .  $route);
>>>>>>> ae4f3d4a15596698514951070fdcfb4d69a7e49b
}