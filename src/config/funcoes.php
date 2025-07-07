<?php

use Core\Session;

function get_base_url() {
    $app_url = $_ENV['APP_URL'];
    if(substr($app_url, -1) !== '/'){
        $app_url .= '/';
    }

    return $app_url;
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
function get_breadcrumbs(){
    include_once(__DIR__ . '/../components/breadcrumbs.php');
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
    include_once(__DIR__ . '/../components/sidebar_vendedor.php');
}

function get_sidebar_cliente($page) {
    include_once(__DIR__ . '/../components/sidebar_cliente.php');
}

function get_sidebar_admin($page) {
    include_once(__DIR__ . '/../components/sidebar_adm.php');
}

function route($location)
{
    return header("location: {$location}");
}

function session(): \Core\Session
{
    global $session;
    return $session;
}

function redirect(): \Core\Redirector
{
    return new \Core\Redirector();
}

function router(): \Core\Router
{
    global $router;
    return $router;
}