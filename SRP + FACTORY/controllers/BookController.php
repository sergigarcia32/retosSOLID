<?php
include_once __DIR__ . '/../model/Book.php';
include_once __DIR__ . '/../interface/Printer.php';
include_once __DIR__ . '/../impl/SearchBook.php';
include_once __DIR__ . '/../impl/BookReader.php';
class BookController
{
    public function __construct(private SearchBook $searchBook, private BookReader $reader) {}

    public function printBook(Printer $printer): void
    {
        $book = $this->searchBook->searchById(1);
        //$pages = $this->reader->read($book);
        $pages = $book->getPages();
        $printer->printPages($pages);
    }
}
