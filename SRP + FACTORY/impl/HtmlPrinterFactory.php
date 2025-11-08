<?php
include_once __DIR__ . '/../interface/PrinterFactory.php';
include_once __DIR__ . '/HtmlPrinter.php';
class HtmlPrinterFactory implements PrinterFactory
{
    public function createPrinter(): Printer
    {
        return new HtmlPrinter();
    }
}
