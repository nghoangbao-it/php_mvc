<?php



$core_paths = [
    '/configs/*.php',
    '/core/*.php',
    '/app/Models/*.php',
    '/app/Controllers/*.php',
];
foreach ($core_paths as $path) {
    foreach (glob(__DIR__ . $path) as $filename) {
        require_once $filename;
    }
}

$router = new Router();

$router_paths = ['/routers/*.php'];
foreach ($router_paths as $path) {
    foreach (glob(__DIR__ . $path) as $filename) {
        require_once $filename;
    }
}

// $controller = new UsersController();
// $controller->index();


$ins = $router->getRoutersInstance();

$requestMethod = $_SERVER['REQUEST_METHOD'];
$requestUrl = $_SERVER['REQUEST_URI'];
$_PROJECT_FOLDER_NAME = '/__php_mvc';
$shortUrl = str_replace($_PROJECT_FOLDER_NAME, '', $requestUrl);

$router->routing($requestMethod, $shortUrl);