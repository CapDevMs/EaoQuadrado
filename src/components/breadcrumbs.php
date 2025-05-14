<?php
get_css_components();
function breadcrumb($url_pieces = array(), $divisor = '/')
{
    if ($url_pieces) {
        $url_crumb = $url_pieces;
        $http = null;
    } else {
        $http = 'http://';
        $request = $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
        $explode = explode('/', $request);
        foreach ($explode as $explodes) {
            $url_crumb[str_replace('.php', '', $explodes)] = str_replace('.php', '', $explode);
        }
    }

    $count = sizeof($url_crumb);
    $i = 1;
    $href = '';
    foreach ($url_crumb as $link => $inner) {
        if ($i == 1) {
            $href .= $http . $link;
        } else {
            $href .= '/' . $link;
        }
        if ($i == $count) {
            $crumb[] = '<span>' . ($inner) . '</span>';
        } else {
            $crumb[] = '<a href="' . $href . '" title="' . $inner . '">' . $inner . '</a> ' . $divisor . ' ';
        }
        $i++;
    }
    echo '<div class="breadcrumb">';
    foreach ($crumb as $crumbs) {
        echo $crumbs;
    }
    echo '</div>';
}
?>

<!-- créditos: https://joseanmatias.com.br/breadcrumb-automatico-com-uso-de-funcao -->