<?php
include_once __DIR__ . '/Printer.php';
// === Fábrica: crea instancias de impresoras ===
interface PrinterFactory
{
    public function createPrinter(): Printer;
}
