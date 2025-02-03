<?php
ob_start();

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$controller = str_replace('/', '', $uri);

if(!$controller) {
    $controller = 'index';
}

$controller = str_replace('.php', '', $controller);

if(!file_exists(__DIR__ . "/controllers/{$controller}.controller.php")) {
    http_response_code(404);
    $view = '404';
    require __DIR__ . "/views/template/app.php";
    exit();
}

require __DIR__ . "/controllers/{$controller}.controller.php";

ob_end_flush();
?>
