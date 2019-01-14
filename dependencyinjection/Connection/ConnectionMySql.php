<?php

require_once "ConnectionInterface.php";

class ConnectionMySql implements ConnectionInterface {

    public function conectar()
    {
        echo "Conectando a BD MySql<br>";
    }

    public function desconectar()
    {
        echo "Desconectando a BD MySql<br>";
    }
}