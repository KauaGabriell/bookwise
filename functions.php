<?php
function view($view, $data = []) {
    extract($data);
    require __DIR__ . "/views/template/app.php";
}

function abort($code) {
    http_response_code($code);
    $view = $code;
    require __DIR__ . "/views/template/app.php";
    exit();
}
?>
