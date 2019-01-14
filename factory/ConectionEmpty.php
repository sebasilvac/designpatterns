<?php

require_once "ConectionInterface.php";

class ConectionEmpty implements ConectionInterface {

    public function conectar()
    {
        echo "No se especificó proveedor<br>";
    }

    public function desconectar()
    {
        echo "No se especificó proveedor<br>";
    }
}