<?php
class Cliente
{
    private int $id;
    private string $nombre;
    private string $tipo;
    private float $money;

    public function __construct(int $id, string $nombre, string $tipo)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->tipo = $tipo;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function getTipoCliente(): string
    {
        return $this->tipo;
    }

    public function aplicarDescuento(float $money): float
    {
        return $this->money;
    }
}
