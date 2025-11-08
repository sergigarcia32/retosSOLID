<?php
include_once __DIR__ . '/model/Book.php';
include_once __DIR__ . '/controllers/BookController.php';
include_once __DIR__ . '/impl/HtmlPrinterFactory.php';
include_once __DIR__ . '/impl/PlainPrinterFactory.php';
$app = new BookController();
$book = new Book("Aprendiendo SOLID", "Sergi Garcia Jimenez", [
    "Página 1: Introducción a SOLID.",
    "Página 2: Principio de Responsabilidad Única.",
    "Página 3: Principio de Abierto/Cerrado.",
    "Página 4: Principio de Sustitución de Liskov.",
    "Página 5: Principio de Segregación de Interfaces.",
    "Fin del libro"
]);
$typePrinter = new HtmlPrinterFactory();
$htmlPrinter = $typePrinter->createPrinter();
$app->printBook($book, $htmlPrinter);
