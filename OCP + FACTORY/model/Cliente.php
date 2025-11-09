<?php
class Cliente
{
    private string $nombre;
    private string $tipo;

    public function __construct(string $nombre, string $tipo)
    {
        $this->nombre = $nombre;
        $this->tipo = $tipo;
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function getTipo(): string
    {
        return $this->tipo;
    }
}
