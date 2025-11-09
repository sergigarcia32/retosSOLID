<?php
include_once __DIR__ . '/../model/Cliente.php';
class ClienteRepository
{
    private array $clientes = [];

    public function __construct()
    {
        $this->clientes[] = new Cliente(1, "Juan", "VIP");
        $this->clientes[] = new Cliente(2, "Ana", "Regular");
    }

    public function findById(int $id): ?Cliente
    {
        foreach ($this->clientes as $cliente) {
            if ($cliente->getId() === $id) {
                return $cliente;
            }
        }
        return null;
    }
}
