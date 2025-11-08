<?php
include_once __DIR__ . '/../model/Book.php';
include_once __DIR__ . '/../interface/Printer.php';
include_once __DIR__ . '/../impl/SearchBook.php';
include_once __DIR__ . '/../impl/BookReader.php';
class BookController
{
    public function __construct(private SearchBook $searchBook, private BookReader $reader) {}

    public function printBook(int $bookId, Printer $printer): void
    {
        $book = $this->findBook($bookId);
        $pages = $this->reader->read($book);
        $this->printPages($printer, $pages);
    }

    private function findBook(int $id): Book
    {
        $book = $this->searchBook->searchById($id);
        if (!$book) {
            throw new Exception("Book with ID $id not found.");
        }
        return $book;
    }

    private function printPages(Printer $printer, array $pages): void
    {
        $printer->printPages($pages);
    }
}
