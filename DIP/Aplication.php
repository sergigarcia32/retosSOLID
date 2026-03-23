<?php

interface RepositorioProducto
{
    public function obtenerPorId(int $id): array;
}

class RepositorioProductoMySQL implements RepositorioProducto
{
    public function obtenerPorId(int $id): array
    {
        // Simulación de consulta a BD
        return ['id' => $id, 'nombre' => 'Producto MySQL', 'precio' => 100];
    }
}

class RepositorioProductoMongo implements RepositorioProducto
{
    public function obtenerPorId(int $id): array
    {
        // Simulación de consulta a Mongo
        return ['id' => $id, 'nombre' => 'Producto Mongo', 'precio' => 120];
    }
}

class ServicioProducto
{
    private RepositorioProducto $repositorio;

    public function __construct(RepositorioProducto $repositorio)
    {
        $this->repositorio = $repositorio;
    }

    public function mostrarProducto(int $id)
    {
        $producto = $this->repositorio->obtenerPorId($id);
        echo "Producto: {$producto['nombre']} - Precio: {$producto['precio']}\n";
    }
}

$repoMySQL = new RepositorioProductoMySQL();
$serviceMySQL = new ServicioProducto($repoMySQL);
$serviceMySQL->mostrarProducto(1);

$repoMongo = new RepositorioProductoMongo();
$serviceMongo = new ServicioProducto($repoMongo);
$serviceMongo->mostrarProducto(2);
