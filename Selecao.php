<?php

class Selecao
{
    public $id;
    public $nome;
    public $pais;

    public function __construct($id, $nome, $pais)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->pais = $pais;
    }
}
