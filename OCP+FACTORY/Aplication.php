<?php
include_once __DIR__ . '/controller/DescuentoController.php';
$descuento = new DescuentoController();

$descuentoAplicado = $descuento->aplicarDescuento(1, 1000);
echo "Descuento VIP aplicado: " . $descuentoAplicado . "\n";

$descuentoAplicado = $descuento->aplicarDescuento(2, 1000);
echo "Descuento REGULAR aplicado: " . $descuentoAplicado . "\n";
