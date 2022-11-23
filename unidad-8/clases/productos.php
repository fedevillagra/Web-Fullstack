<?php
    class Productos{
        private $bd;

        function __construct($base)
        {
            $this->bd=$base;
        }

        public function seleccionarProductos()
        {
            return $this->bd->enviarConsulta("SELECT * FROM productos");
        }

        public function seleccionarUnProducto($cod)
        {
            return $this->bd->enviarConsulta("SELECT * FROM productos WHERE codigo=$cod");
        }
    }
?>