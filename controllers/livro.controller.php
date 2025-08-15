<?php
require 'dados.php'; // Exige o arquivo dados.php para acessar os dados dos livros

// Obtém o ID do livro da requisição, se não existir, define como null
$id = $_REQUEST['id'] ?? null;

$filtrados = array_filter($livros, fn($livro) => $livro['id'] == $id);
$livro = array_pop($filtrados); // Obtém o livro correspondente ao ID, se existir

view('livro', compact('livro')); // Carrega a view do livro
// A função view() já inclui o template principal da aplicação, que renderiza a view solicitada