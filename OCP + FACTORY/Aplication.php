<?php
include_once __DIR__ . '/model/Cliente.php';
include_once __DIR__ . '/controller/CalculadoraController.php';
$clienteVIP = new Cliente("Carlos Pérez", "vip");
$clienteRegular = new Cliente("Ana López", "regular");

$calculadora = new CalculadoraController();

echo "Descuento cliente VIP: " . $calculadora->calcularDescuento($clienteVIP, 1000) . PHP_EOL;
echo "Descuento cliente Regular: " . $calculadora->calcularDescuento($clienteRegular, 1000) . PHP_EOL;
