<?php

$livros = (new DB)->livros($_REQUEST['pesquisa']); // Obtém todos os livros do banco de dados

view('index', compact('livros')); // Alternativa usando compact() caso a variável tenha o mesmo nome da chave