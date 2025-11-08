<?php
include_once __DIR__ . '/../interface/PrinterFactory.php';
include_once __DIR__ . '/PlainPrinter.php';
class PlainPrinterFactory implements PrinterFactory
{
    public function createPrinter(): Printer
    {
        return new PlainPrinter();
    }
}
