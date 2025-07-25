<?php

use Core\Session;
use Core\Redirector;
use Core\Router;

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

function route(string $name, array $params = []): ?string
{
    $router = router(); // função helper que retorna o Router singleton

    $url = $router->route($name);

    if (!$url) {
        return null;
    }

    // Substitui os parâmetros no estilo {id}, {slug}
    foreach ($params as $key => $value) {
        $url = str_replace("{" . $key . "}", $value, $url);
    }

    return $_ENV['APP_URL'] . $url;
}

function session(): Session
{
    global $session;
    return $session;
}

function redirect(): Redirector
{
    return new Redirector();
}

function router(): Router
{
    global $router;
    return $router;
}