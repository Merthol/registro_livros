<?php

class DB
{
    /**
     * Classe de conexão com o banco de dados
     * Esta classe é responsável por estabelecer a conexão com o banco de dados SQLite
     * e fornecer métodos para interagir com os dados.
     */

    private $db;

    public function __construct()
    {
        $this->db = new PDO('sqlite:database.sqlite'); // Conecta ao banco de dados SQLite
    }

    public function livros($pesquisa = null)
    {
        /**
         * Obtém todos os livros do banco de dados
         * Este método executa uma consulta SQL para buscar todos os livros
         * e retorna um array de objetos Livro.
         *
         * @return Livro[] Array de objetos Livro com os dados obtidos do banco de dados.
         */

        $sql = "SELECT * FROM livros WHERE titulo LIKE '%$pesquisa%' OR autor LIKE '%$pesquisa%' OR descricao LIKE '%$pesquisa%'";

        $query = $this->db->query($sql); // Executa uma consulta para obter todos os livros
        $itens = $query->fetchAll(); // Obtém os resultados como um array associativo

        return array_map(fn($item) => Livro::fromArray($item), $itens); // Mapeia os resultados para objetos Livro

        // Alternativamente, se preferir retornar um array de objetos Livro:
        // $itens = $query->fetchAll(); // Obtém os resultados como um array associativo
        // $retorno = [];

        // foreach ($itens as $item) {
        //     $livro = Livro::fromArray($item); // Cria um objeto Livro a partir do array associativo
        //     // Ou alternativamente:
        //     // $livro = new Livro(
        //     //     $item['id'],
        //     //     $item['titulo'],
        //     //     $item['autor'],
        //     //     $item['descricao']
        //     // );
        //     $retorno[] = $livro; // Adiciona o livro ao array de retorno
        // }

        // return $retorno; // Retorna o array de livros

    }

    public function livro($id)
    {
        /**
         * Obtém um livro específico pelo ID
         * Este método executa uma consulta SQL para buscar um livro
         * específico pelo ID e retorna um objeto Livro.
         * * @param int $id ID do livro a ser buscado.
         *
         * @return Livro|null Objeto Livro com os dados obtidos do banco de dados ou null se não encontrado.
         */
        $sql = "select * from livros where id = " . $id; // Consulta para obter o livro pelo ID
        $query = $this->db->query($sql);
        $itens = $query->fetchAll(); // Obtém o resultado como um array associativo

        return array_map(fn($item) => Livro::fromArray($item), $itens)[0]; // Mapeia os resultados para objetos Livro
    }
}
