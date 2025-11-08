<?php
include_once __DIR__ . '/model/Book.php';
include_once __DIR__ . '/controllers/BookController.php';
include_once __DIR__ . '/impl/HtmlPrinterFactory.php';
include_once __DIR__ . '/impl/PlainPrinterFactory.php';
include_once __DIR__ . '/repository/BookRepository.php';
include_once __DIR__ . '/impl/SearchBook.php';
include_once __DIR__ . '/impl/BookReader.php';

$bookRepository = new BookRepository();
$searchBook = new SearchBook($bookRepository);
$bookReader = new BookReader();
$app = new BookController($searchBook, $bookReader);

$typePrinter = new HtmlPrinterFactory();
$htmlPrinter = $typePrinter->createPrinter();
$app->printBook($htmlPrinter);
