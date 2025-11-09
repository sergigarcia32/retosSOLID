<?php
include_once __DIR__ . '/../services/DescuentoService.php';

class DescuentoController
{
    private DescuentoService $descuentoService;

    public function __construct()
    {
        $this->descuentoService = new DescuentoService();
    }

    public function aplicarDescuento(int $idCliente, float $monto, EstrategiaDescuento $estrategia): float
    {
        return $this->descuentoService->aplicarDescuentoCliente($idCliente, $monto, $estrategia);
    }
}
