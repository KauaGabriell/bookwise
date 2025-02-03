<?php
require 'dados.php';

if (!isset($_REQUEST['id'])) {
    abort(404);
}

$id = $_REQUEST['id'];
$filtrado = array_filter($livros, fn($l) => $l['id'] == $id);
$livro = array_pop($filtrado);

if (!$livro) {
    abort(404);
}

view('livro', ['livro' => $livro]);
?>
