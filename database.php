<?php

use function PHPSTORM_META\sql_injection_subst;

class DB
{
    private $db;

    public function __construct()
    {
        $this -> db = new PDO('sqlite:database.sqlite');
    }

    public function livros($pesquisar = null)
    {
        $sql = "SELECT * FROM livros WHERE titulo like '%pesquisa%' OR autor LIKE '%pesquisa%' OR descricao LIKE '%pesquisa%' " ;
        $query = $this->db->query($sql);
        $items = $query->fetchAll();
        
        return array_map(fn($item) => Livro::make($item), $items);
        
    }


    public function livro($id)
{
    $sql = "SELECT * FROM livros WHERE id = " . $id; // Corrigido: adicionado espaço após "FROM livros"
    $query = $this->db->query($sql);
    $items = $query->fetchAll();
    $retorno = [];

    return array_map(fn($item) => Livro::make($item), $items);

    }

}