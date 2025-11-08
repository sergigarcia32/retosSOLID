<?php
include_once __DIR__ . '/../model/Book.php';
class BookReader
{
    public function read(Book $book): array
    {
        $pages = [];
        while (true) {
            $page = $book->getCurrentPage();
            if ($page === 'Fin del libro') break;
            $pages[] = $page;
            $book->nextPage();
        }
        return $pages;
    }
}
