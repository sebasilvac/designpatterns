<?php

class Memento {

    private $estado;

    public function __construct(Juego $estado)
    {
        $this->estado = $estado;
    }

    public function getEstado()
    {
        return $this->estado;
    }
}