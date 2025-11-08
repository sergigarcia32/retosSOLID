<?php
include_once __DIR__ . '/../repository/BookRepositoryInterface.php';
include_once __DIR__ . '/../model/Book.php';
class BookRepository implements BookRepositoryInterface
{
    private Book $book;
    public function __construct() {}

    public function getById(int $id): ?Book
    {

        return $this->book = new Book("Aprendiendo SOLID", "Sergi Garcia Jimenez", [
            "Página 1: Introducción a SOLID.",
            "Página 2: Principio de Responsabilidad Única.",
            "Página 3: Principio de Abierto/Cerrado.",
            "Página 4: Principio de Sustitución de Liskov.",
            "Página 5: Principio de Segregación de Interfaces.",
            "Fin del libro"
        ]);
    }
}
