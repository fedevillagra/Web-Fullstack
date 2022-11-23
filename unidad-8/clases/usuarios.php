<?php
    class Usuarios{
        private $nombre;
        private $apellido;
        private $edad;

        function __construct($nom,$ape,$edad){
            $this->nombre=$nom;
            $this->apellido=$ape;
            $this->edad=$edad;
        }

        function imprime_carcteristicas(){
            echo '<table class="table">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Edad</th>
                </tr>
            </thead>
            <tbody>
                    <tr><td>'.$this->nombre.'</td>
                    <td>'.$this->apellido.'</td>
                    <td>'.$this->edad.' años</td></tr>
            </tbody>
        </table>';
        }
    }
?>