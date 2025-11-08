<?php
include_once __DIR__ . '/../interface/Printer.php';
class PlainPrinter implements Printer
{
    public function printPage(string $page): void
    {
        echo $page . PHP_EOL;
    }
}
