<?php

require_once "ConectionInterface.php";

class ConectionMySql implements ConectionInterface {

    public function conectar()
    {
        echo "Conectando a BD MySql<br>";
    }

    public function desconectar()
    {
        echo "Desconectando a BD MySql<br>";
    }
}