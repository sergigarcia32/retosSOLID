<?php
include_once __DIR__ . '/../impl/HtmlPrinter.php';
include_once __DIR__ . '/../impl/PlainPrinter.php';
// === Interfaz: define el contrato de las impresoras ===
interface Printer
{
    public function printPage(string $page): void;
}
