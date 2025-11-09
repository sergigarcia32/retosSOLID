<?php
class DescuentoVIPFactory
{
    public static function crearEstrategia(): EstrategiaDescuento
    {
        return new DescuentoVip();
    }
}
