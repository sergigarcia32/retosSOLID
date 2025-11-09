<?php
include_once __DIR__ . '/../repository/ClienteRepository.php';
include_once __DIR__ . '/../strategyFactory/DescuentoFactory.php';
include_once __DIR__ . '/../strategyFactory/impl/DescuentoRegularFactory.php';
include_once __DIR__ . '/../strategyFactory/impl/DescuentoVIPFactory.php';
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

    public function aplicarDescuentoCliente(int $id, float $money, EstrategiaDescuento $descuentoEstrategia): float
    {
        $cliente = $this->clienteRepository->findById($id);
        if ($cliente === null) {
            throw new Exception("Cliente no encontrado");
        }

        return $descuentoEstrategia->calcular($money);
    }
}
