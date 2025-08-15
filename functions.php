<?php

function view($view, $data = [])
{
    foreach ($data as $key => $value) {
        $$key = $value; // Extrai os dados para o escopo global da view
    }
    require "views/template/app.php"; // Carrega o template principal da aplicação
}

function dd(...$dump)
{
    echo "<pre>";
    var_dump($dump);
    echo "</pre>";
    die();
}

function abort($code)
{
    http_response_code($code); // Define o código de resposta HTTP como 404 (Not Found)
    // echo "Página não encontrada"; // Exibe uma mensagem de erro
    view($code); // Carrega a view de erro 404
    die(); // Interrompe a execução do script
}
