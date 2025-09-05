<?php

/**
 * Classe Livro
 * Representa um livro com suas propriedades e construtor.
 */
class Livro
{

    public int $id;
    public string $titulo;
    public string $autor;
    public string $descricao;

    // public function __construct($id, $titulo, $autor, $descricao)
    // {
    //     $this->id = $id;
    //     $this->titulo = $titulo;
    //     $this->autor = $autor;
    //     $this->descricao = $descricao;
    // }

    public static function fromArray(array $data)
    {
        $livro = new self();
        $livro->id = $data['id'];
        $livro->titulo = $data['titulo'];
        $livro->autor = $data['autor'];
        $livro->descricao = $data['descricao'];

        return $livro;
    }
}
