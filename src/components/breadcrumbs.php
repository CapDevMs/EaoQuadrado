<?php
function getBreadcrumbs($path) {
    $breadcrumbs = [];
    $parts = explode('/', $path); // Divide o caminho em partes
    $url = 'http://localhost/'; // Base URL

    foreach ($parts as $part) {
        if (strpos($part, '.php') !== false) {
            $url .= $part; // Adiciona a extensão .php para corresponder às páginas reais
        } else {
            $url .= $part . '/'; // Constrói a URL para cada parte
        }
        $breadcrumbs[] = [
            'name' => ucfirst($part), // Coloca a primeira letra em maiúscula
            'url' => $url
        ];
    }

    return $breadcrumbs;
}

// // Exemplo de caminho
// $path = 'EaoQuadrado/src/pages/cadastros/contato.php';
// $breadcrumbs = getBreadcrumbs($path);
?>



