<?php
include_once __DIR__ . '/../model/Cliente.php';
include_once __DIR__ . '/../impl/DescuentoRegular.php';
include_once __DIR__ . '/../impl/DescuentoVip.php';
class CalculadoraController
{
    public function calcularDescuento(Cliente $cliente, float $money): float
    {
        $estrategia = $this->obtenerEstrategia($cliente->getTipo());
        return $estrategia->calcular($money);
    }

    private function obtenerEstrategia(string $tipo): EstrategiaDescuento
    {
        return match ($tipo) {
            'vip' => new DescuentoVIP(),
            default => new DescuentoRegular(),
        };
    }
}
