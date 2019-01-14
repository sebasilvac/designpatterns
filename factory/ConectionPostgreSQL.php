<?php

require_once "ConectionInterface.php";

class ConectionPostgreSQL implements ConectionInterface {

    public function conectar()
    {
        echo "Conectando a BD PostgreSQL<br>";
    }

    public function desconectar()
    {
        echo "Desconectando a BD PostgreSQL<br>";
    }
}