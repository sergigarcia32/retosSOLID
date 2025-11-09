<?php
include_once __DIR__ . '/../strategy/interfaces/EstrategiaDescuento.php';
interface DescuentoFactory
{
    public static function crearEstrategia(EstrategiaDescuento $estrategia): EstrategiaDescuento;
}
