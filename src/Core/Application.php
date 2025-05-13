<?php

namespace Core;

class Application {
    
    public function __construct() {
        // Inicia a sessão
        if (!isset($_SESSION)) {
            session_start();
        }

        define('BASE_PROJECT', __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR);
    }

    public function bootstrap(){
        spl_autoload_register(function ($class) {
            $class = str_replace('\\', '/', $class);
            $file = BASE_PROJECT . $class . '.php';
        
            if (file_exists($file)) {
                require_once $file;
            }
        });
        
        // Carrega o arquivo .env
        if (file_exists(BASE_PROJECT . '.env')) {
            (new DotEnvEnvironment)->load(BASE_PROJECT);
        }
    }

    public function run() {
        
        // Carrega as funções
        if (file_exists(BASE_PROJECT . 'config/funcoes.php')) {
            include_once BASE_PROJECT . 'config/funcoes.php';
        }
        // Carrega o arquivo de rotas
        if (file_exists(BASE_PROJECT . 'Routes/web.php')) {
            include_once BASE_PROJECT . 'Routes/web.php';
        }
    }
}