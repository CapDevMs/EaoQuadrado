<?

namespace Core;

class View 
{
    public static function render($view, $args = []) 
    {
        $viewFolder = __DIR__ . '/../';

        extract($args);

        require_once "$viewFolder/pages/$view.php";
    }
}