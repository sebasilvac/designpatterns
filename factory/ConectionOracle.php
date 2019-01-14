<?php

require_once "ConectionInterface.php";

class ConectionOracle implements ConectionInterface {

    public function conectar()
    {
        echo "Conectando a BD Oracle<br>";
    }

    public function desconectar()
    {
        echo "Desconectando a BD Oracle<br>";
    }
}