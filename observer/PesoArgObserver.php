<?php

require_once "ObserverAbstract.php";

class PesoArgObserver extends ObserverAbstract {

    private $valorCambio = 2.05;
    public $subject;

    public function __construct(Subject $subject)
    {
        $this->subject = $subject;
        $this->subject->agregar($this);
    }

    public function actualizar()
    {
        $total = $this->subject->getEstado() * $this->valorCambio;
        echo "PESO ARG: {$total} <br>";
    }

}