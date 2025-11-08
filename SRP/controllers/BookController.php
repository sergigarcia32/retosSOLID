<?php
include_once __DIR__ . '/../model/Book.php';
include_once __DIR__ . '/../interface/Printer.php';
class BookController
{
    function __construct()
    {
      
    }
    public function printBook(Book $book, Printer $printer): void
    {
        while (true) {
            $page = $book->getCurrentPage();
            if ($page === 'Fin del libro') {
                break;
            }
            $printer->printPage($page);
            $book->nextPage();
        }
    }
}
