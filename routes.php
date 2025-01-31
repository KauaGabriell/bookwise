<?php


// routes.php
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$controller = str_replace('.php', '', str_replace('/', '', $uri));

if(!$controller) {
    $controller = 'index';
}

// Remove extensão .php se existir na URL
$controller = str_replace('.php', '', $controller);

// Verifica se o arquivo do controller existe
if(!file_exists(__DIR__ . "/controllers/{$controller}.controller.php")) {
    abort(404);
}

require __DIR__ . "/controllers/{$controller}.controller.php";
