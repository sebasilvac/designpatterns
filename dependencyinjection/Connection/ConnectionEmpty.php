<?php

require_once "ConnectionInterface.php";

class ConnectionEmpty implements ConnectionInterface {

    public function conectar()
    {
        echo "No se especificó proveedor<br>";
    }

    public function desconectar()
    {
        echo "No se especificó proveedor<br>";
    }
}