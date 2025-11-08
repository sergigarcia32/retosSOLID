<?php
include_once __DIR__ . '/../interface/Printer.php';
class HtmlPrinter implements Printer
{
    public function printPages(array $pages): void
    {
        foreach ($pages as $page) {
            echo "<div style='border: 1px solid #000; padding: 10px; margin: 10px 0;'>" . htmlspecialchars($page) . "</div>" . PHP_EOL;
        }
    }
}
