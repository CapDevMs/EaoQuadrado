<?

namespace Core;

class View 
{
    public static function render($view, $args = []) 
    {
        $viewFolder = __DIR__ . '/../Views';

        extract($args);

        
        if(strpos($view, '.')){
            $view = str_replace('.','/', $view);
        }

        require_once "$viewFolder/$view.php";
    }
}