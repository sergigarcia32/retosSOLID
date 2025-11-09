<?php
include_once __DIR__ . '/../interfaces/EstrategiaDescuento.php';
class DescuentoVip implements EstrategiaDescuento
{
    public function calcular(float $money): float
    {
        return $money * 0.90;
    }
}
