<?php
require '../vendor/autoload.php';

$uri = $_SERVER['REQUEST_URI'];
// Si l'utilisateur poste un url avec un /, redirect vers la version sans le /.
if(!empty($uri) && $uri[-1] === "/"){
    header('Location: ' . substr($uri, 0, -1));
    header('HTTP/1.1 301 Moved Permanently');
}

$router = new AltoRouter();

require '../config/routes.php';
$match = $router->match();
if (is_array($match)) {
    if (is_callable($match['target'])) {
        call_user_func_array($match['target'], $match['params']);
    } else {
        $params = $match['params'];
        ob_start();
        require "../templates/{$match['target']}.php";
       
        $pageContent = ob_get_clean();
    }
    require '../elements/layout.php';
} else {
    require '../templates/404.php';
}
