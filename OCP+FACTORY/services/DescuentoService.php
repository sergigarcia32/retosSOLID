<?php
include_once __DIR__ . '/../repository/ClienteRepository.php';
include_once __DIR__ . '/../strategy/interfaces/EstrategiaDescuento.php';
include_once __DIR__ . '/../strategy/impl/DescuentoVip.php';
include_once __DIR__ . '/../strategy/impl/DescuentoRegular.php';

class DescuentoService
{

    private ClienteRepository $clienteRepository;

    public function __construct()
    {
        $this->clienteRepository = new ClienteRepository();
    }

    public function aplicarDescuentoCliente(int $id, float $money): float
    {
        $cliente = $this->clienteRepository->findById($id);
        if ($cliente === null) {
            throw new Exception("Cliente no encontrado");
        }

        $estrategia = $this->obtenerEstrategia($cliente->getTipoCliente());
        return $estrategia->calcular($money);
    }

    private function obtenerEstrategia(string $tipoCliente): EstrategiaDescuento
    {
        if ($tipoCliente === 'VIP') {
            return new DescuentoVip();
        } else {
            return new DescuentoRegular();
        }
    }
}
