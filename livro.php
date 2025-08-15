<?php
require 'dados.php'; // Exige o arquivo dados.php para acessar os dados dos livros

// Obtém o ID do livro da requisição, se não existir, define como null
$id = $_REQUEST['id'] ?? null;

$filtrados = array_filter($livros, fn($livro) => $livro['id'] == $id);
$livro = array_pop($filtrados); // Obtém o livro correspondente ao ID, se existir

$view = "livro";
require 'views/template/app.php'; // Carrega o template principal da aplicação
