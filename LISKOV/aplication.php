<?php

interface MetodoPago
{
    public function pagar(float $cantidad);
}

interface MetodoReembolsable
{
    public function reembolsar(float $cantidad);
}

class PagoConTarjeta implements MetodoPago, MetodoReembolsable {
    public function pagar(float $cantidad) {
        echo "Pago con tarjeta: $cantidad\n";
    }

    public function reembolsar(float $cantidad) {
        echo "Reembolso a tarjeta: $cantidad\n";
    }
}

class PagoConCripto implements MetodoPago {
    public function pagar(float $cantidad) {
        echo "Pago con cripto: $cantidad\n";
    }
}

function procesarPago(MetodoPago $metodo, float $cantidad)
{
    $metodo->pagar($cantidad);
}

function procesarReembolso(MetodoReembolsable $metodo, float $cantidad)
{
    $metodo->reembolsar($cantidad);
}


$tarjeta = new PagoConTarjeta();
procesarPago($tarjeta, 100);
procesarReembolso($tarjeta, 50); 

$cripto = new PagoConCripto();
procesarPago($cripto, 200);