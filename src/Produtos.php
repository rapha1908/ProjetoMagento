<?php

class Produtos
{
    private $mysql;

    public function __construct(mysqli $mysql)
    {
        $this->mysql = $mysql;
    }

    public function exibirTodos(): array
    {

        $resultado = $this->mysql->query('SELECT id, titulo, descricao FROM produtos');
        $produtos = $resultado->fetch_all(MYSQLI_ASSOC);

        return $produtos;
    }

}
?>