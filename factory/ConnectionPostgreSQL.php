<?php

require_once "ConectionInterface.php";

class ConnectionPostgreSQL implements ConnectionInterface {

    public function conectar()
    {
        echo "Conectando a BD PostgreSQL<br>";
    }

    public function desconectar()
    {
        echo "Desconectando a BD PostgreSQL<br>";
    }
}