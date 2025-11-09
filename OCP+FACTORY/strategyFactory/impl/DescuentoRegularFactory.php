<?php
class DescuentoRegularFactory
{
    public static function crearEstrategia(): EstrategiaDescuento
    {
        return new DescuentoRegular();
    }
}
