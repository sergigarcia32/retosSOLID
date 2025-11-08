<?php
include_once __DIR__ . '/../model/Book.php';
include_once __DIR__ . '/../repository/BookRepository.php';
interface BookRepositoryInterface
{
    public function getById(int $id): ?Book;
}
