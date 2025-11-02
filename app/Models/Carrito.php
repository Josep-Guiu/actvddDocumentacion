<?php

/**
 * Clase Carrito
 * 
 * Gestiona el carrito de compras del usuario, permitiendo agregar productos,
 * calcular el total y vaciar el carrito cuando sea necesario.
 */
class Carrito
{
    /** @var array $productos Array de productos en el carrito */
    private $productos;

    /**
     * Constructor de la clase Carrito
     * Inicializa el array de productos vacío
     */
    public function __construct()
    {
        $this->productos = [];
    }

    /**
     * Agrega un producto al carrito
     *
     * @param Producto $producto Producto a agregar
     * @return void
     */
    public function agregarProducto($producto)
    {
        $this->productos[] = $producto;
    }

    /**
     * Calcula el total de todos los productos en el carrito
     *
     * @return float Total del carrito
     */
    public function calcularTotalCarrito()
    {
        $total = 0;
        foreach ($this->productos as $producto) {
            $total += $producto->getPrecio();
        }
        return $total;
    }

    /**
     * Vacía el carrito eliminando todos los productos
     *
     * @return void
     */
    public function vaciarCarrito()
    {
        $this->productos = [];
    }

    /**
     * Obtiene la lista de productos en el carrito
     *
     * @return array Array de productos
     */
    public function getProductos()
    {
        return $this->productos;
    }
}