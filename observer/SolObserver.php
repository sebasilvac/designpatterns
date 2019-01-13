<?php

require_once "ObserverAbstract.php";

class SolObserver extends ObserverAbstract {

    private $valorCambio = 3.25;
    public $subject;

    public function __construct(Subject $subject)
    {
        $this->subject = $subject;
        $this->subject->agregar($this);
    }

    public function actualizar()
    {
        $total = $this->subject->getEstado() * $this->valorCambio;
        echo "SOL: {$total} <br>";
    }

}