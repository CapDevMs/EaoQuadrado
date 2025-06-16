<?php

namespace Core;

use Core\Model;

class Migration
{

    protected Model $model;

    public function __construct() 
    {
        $this->model = new Model();
    }

    public function execute()
    {
        // Aqui vai a lógica de aplicar as migrations como discutido
        echo "Executando migrations...\n";

        // Exemplo simplificado de teste
        $dir = __DIR__ . '/../database/migrations';
        $files = glob("$dir/*.sql");
        sort($files);

        foreach ($files as $file) {
            echo "Aplicando: " . basename($file) . "\n";
            $sql = file_get_contents($file);
            $this->model->query($sql);
        }

        echo "Migrations aplicadas.\n";
    }
}
