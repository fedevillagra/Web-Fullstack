<?php
    class Carrito{
        private $bd;

        function __construct($base)
        {
            $this->bd=$base;
        }

        public function introducirAlCarrito($prod,$desc,$pre)
        {
            return $this->bd->enviarConsulta("INSERT INTO compras VALUES(DEFAULT,'$prod','$desc','$pre')");
        }
        public function eliminarDelCarrito($cod)
        {
            return $this->bd->enviarConsulta("DELETE FROM compras WHERE codigo=$cod");
        }
        public function listarCarrito()
        {
            return $this->bd->enviarConsulta("SELECT * FROM compras");     
        }

    }
?>