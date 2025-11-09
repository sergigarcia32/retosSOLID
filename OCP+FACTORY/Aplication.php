<?php
include_once __DIR__ . '/controller/DescuentoController.php';

$descuento = new DescuentoController();

$descuentoVIPFactory = new DescuentoVIPFactory();
$descuentoRegularFactory = new DescuentoRegularFactory();

$descuentoAplicado = $descuento->aplicarDescuento(1, 1000, $descuentoVIPFactory->crearEstrategia());
echo "Descuento VIP aplicado: " . $descuentoAplicado . "\n";

$descuentoAplicado = $descuento->aplicarDescuento(2, 1000, $descuentoRegularFactory->crearEstrategia());
echo "Descuento REGULAR aplicado: " . $descuentoAplicado . "\n";
