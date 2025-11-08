<?php
include_once __DIR__ . '/../repository/BookRepositoryInterface.php';
include_once __DIR__ . '/../model/Book.php';
class SearchBook
{
    private BookRepositoryInterface $bookRepository;

    public function __construct(BookRepositoryInterface $bookRepository)
    {
        $this->bookRepository = $bookRepository;
    }

    public function searchById(int $id): ?Book
    {
        $book = $this->bookRepository->getById($id);
        if ($book !== null) {
            return $book;
        }
        return null;
    }
}
