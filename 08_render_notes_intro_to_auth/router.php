<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

// dd(parse_url($uri));


$routes = [
    '/' => 'controllers/index.php',
    '/about' => 'controllers/about.php',
    '/notes' => 'controllers/notes.php',
    '/note' => 'controllers/note.php'

];


function routeToControllers($uri, $routes){
    if(array_key_exists($uri, $routes)){
        require $routes[$uri];
    }else{
        abort(404);
    }
}
function abort($code = 404) {
    http_response_code(404);
    require "views/{$code}.php";
    die();
}

routeToControllers($uri, $routes);