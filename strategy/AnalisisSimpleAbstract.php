<?php

require_once "EstrategyInterface.php";

abstract class AnalisisSimpleAbstract implements EstrategyInterface {

    public function analizar()
    {
        $this->iniciar();
        $this->saltarZip();
        $this->detener();
    }

    abstract function iniciar();
    abstract function saltarZip();
    abstract function detener();
}