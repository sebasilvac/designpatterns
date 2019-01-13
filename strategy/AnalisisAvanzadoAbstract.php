<?php

require_once "EstrategyInterface.php";

abstract class AnalisisAvanzadoAbstract implements EstrategyInterface {

    public function analizar()
    {
        $this->iniciar();
        $this->analizarMemoria();
        $this->analizarKeyLogger();
        $this->analizarRootKit();
        $this->descomprimirZip();
        $this->detener();
    }

    abstract function iniciar();
    abstract function analizarMemoria();
    abstract function analizarKeyLogger();
    abstract function analizarRootKit();
    abstract function descomprimirZip();
    abstract function detener();
}