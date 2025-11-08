<?php
include_once __DIR__ . '/../interface/Printer.php';
class PlainPrinter implements Printer
{
    public function printPages(array $pages): void
    {
        foreach ($pages as $page) {
            echo $page . PHP_EOL;
        }
    }
}
