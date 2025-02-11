<?php
//Representação de um Registro do banco de dados em forma de classe
class Livro{
    public $id;
    public $titulo;
    public $descricao;
    public $autor;
}


class DB {
    public function livros(){
        $db =  $pdo = new PDO('sqlite:database.sqlite');
        $query = $db->query("SELECT * FROM livros");
        $items = $query->fetchAll();
        $retorno = [];

        foreach($items as $item){
            $livro = new Livro;
            $livro->id = $item['id'];
            $livro->titulo = $item['titulo'];
            $livro->autor = $item['autor'];
            $livro->descricao = $item['descricao'];

            $retorno [] = $livro;
        }

        return $retorno;
    }
}