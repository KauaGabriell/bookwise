<?php

$id = $_REQUEST['id'];
$db = new DB;
$livro = $db -> livro($id);

if (!isset($_REQUEST['id'])) {
    abort(404);
}

if (!$livro) {
    abort(404);
}

view('livro', ['livro' => $livro]);
?>
