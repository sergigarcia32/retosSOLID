<?php
include_once __DIR__ . '/../interfaces/EstrategiaDescuento.php';
class DescuentoRegular implements EstrategiaDescuento
{
    public function calcular(float $money): float
    {
        return $money * 0.95;
    }
}
