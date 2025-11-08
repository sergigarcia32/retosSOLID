<?php
/*Reto: Sistema de cálculo de descuentos

Tienes un sistema que aplica descuentos a distintos tipos de clientes. Inicialmente tienes solo clientes regulares y clientes VIP, y el código actual es así:

class Cliente {
public $tipo;

    public function __construct($tipo) {
        $this->tipo = $tipo;
    }
}

class CalculadoraDescuento {
    public function calcular(Cliente $cliente, $monto) {
        if ($cliente->tipo === 'regular') {
            return $monto * 0.95; // 5% de descuento
        } elseif ($cliente->tipo === 'vip') {
            return $monto * 0.90; // 10% de descuento
        }
    }
}

// Uso
$clienteVIP = new Cliente('vip');
$calc = new CalculadoraDescuento();
echo $calc->calcular($clienteVIP, 1000);

Problema: Cada vez que quieres agregar un nuevo tipo de cliente con un descuento distinto, tienes que modificar CalculadoraDescuento. Esto viola OCP, porque la clase no está “cerrada para modificación”.
*/
interface Cliente
{
    public function calcularDescuento($dinero);
}

class ClienteRegular implements Cliente
{
    public function calcularDescuento($dinero)
    {
        return $dinero * 0.95; 
    }
}

class ClienteVIP implements Cliente
{
    public function calcularDescuento($dinero)
    {
        return $dinero * 0.90; 
    }
}

class CalculadoraDescuento
{
    public function calcular(Cliente $cliente, $dinero)
    {
        return $cliente->calcularDescuento($dinero);
    }
}


$clienteVIP = new ClienteVIP();
$calculadora = new CalculadoraDescuento();
echo $calculadora->calcular($clienteVIP, 1000);
