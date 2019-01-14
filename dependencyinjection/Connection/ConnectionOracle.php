<?php

require_once "ConnectionInterface.php";

class ConnectionOracle implements ConnectionInterface {

    public function conectar()
    {
        echo "Conectando a BD Oracle<br>";
    }

    public function desconectar()
    {
        echo "Desconectando a BD Oracle<br>";
    }
}