<?php

// Obtém o ID do livro da requisição, se não existir, define como null
$id = $_REQUEST['id'] ?? null;
$livro = (new DB)->livro($id); // Obtém o livro correspondente ao ID do banco de dados

view('livro', compact('livro')); // Carrega a view do livro
// A função view() já inclui o template principal da aplicação, que renderiza a view solicitada