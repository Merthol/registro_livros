<?php
require 'dados.php'; // Exige o arquivo dados.php para acessar os dados dos livros

$view = "index";

// view($view, ['livros' => $livros]); // Carrega a view principal da aplicação
view($view, compact('livros')); // Alternativa usando compact() caso a variável tenha o mesmo nome da chave
// A função view() já inclui o template principal da aplicação, que renderiza a view solicitada