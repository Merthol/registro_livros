<?php
require 'dados.php'; // Exige o arquivo dados.php para acessar os dados dos livros

// Obtém o ID do livro da requisição, se não existir, define como null
$id = $_REQUEST['id'] ?? null;

$filtrados = array_filter($livros, fn($livro) => $livro['id'] == $id);

$livro = array_pop($filtrados); // Obtém o livro correspondente ao ID, se existir
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Registro de Livros</title>
</head>

<body class="bg-stone-950 text-stone-200">
    <header class="bg-stone-800">
        <nav class="mx-auto max-w-screen-lg flex justify-between py-4">
            <div class="font-bold text-xl tracking-wide">Book Wise</div>
            <ul class="flex space-x-4 font-bold">
                <li><a href="/" class="text-lime-500">Explorar</a></li>
                <li><a href="/meus-livros.php" class="hover:underline">Meus livros</a></li>
            </ul>
            <ul>
                <li><a href="/login.php" class="hover:underline">Fazer Login</a></li>
            </ul>
        </nav>
    </header>

    <main class="mx-auto max-w-screen-lg space-y-6">
        <?= $livro['titulo'] ?>
        <div class=" p-2 rounded border-stone-800 border-2 bg-stone-900">
            <div class="flex">
                <div class="w-1/3">imagem</div>
                <div class="space-y-1">
                    <a href="/livro.php?id=<?= $livro['id'] ?>" class="font-semibold hover:underline"><?= $livro['titulo'] ?></a>
                    <div class="text-xs italic"><?= $livro['autor'] ?></div>
                    <div class="text-xs italic">⭐⭐⭐⭐⭐(3 Avaliação)</div>
                </div>
            </div>
            <div class="text-sm mt-2">
                <?= $livro['descricao'] ?>
            </div>
        </div>
    </main>
</body>

</html>