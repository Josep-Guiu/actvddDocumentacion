<?php

/**
 * Clase Producto
 *
 * Representa un producto dentro de la tienda.
 */
class Producto
{
    /** @var int $id Identificador único del producto */
    private $id;

    /** @var string $nombre Nombre del producto */
    private $nombre;

    /** @var float $precio Precio del producto */
    private $precio;

    /**
     * Constructor de la clase Producto.
     *
     * @param int $id Identificador del producto
     * @param string $nombre Nombre del producto
     * @param float $precio Precio del producto
     */
    public function __construct($id, $nombre, $precio)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->precio = $precio;
    }

    /**
     * Obtiene el nombre del producto.
     *
     * @return string Nombre del producto
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Obtiene el precio del producto.
     *
     * @return float Precio del producto
     */
    public function getPrecio()
    {
        return $this->precio;
    }
}
