<?php
interface EstrategiaDescuento
{
    public function calcular(float $money): float;
}
