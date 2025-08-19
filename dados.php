<?php

$db = new PDO('sqlite:database.sqlite'); // Conecta ao banco de dados SQLite
$query = $db->query('SELECT * FROM livros'); // Executa uma consulta para obter todos os livros
$count = count($query->fetchAll());
echo "Número de livros encontrados: $count\n"; // Exibe o número de livros encontrados
dd($query); // Exibe o número de linhas retornadas pela consulta
$livros = $query->fetchAll(); // Obtém todos os resultados como um array associativo
