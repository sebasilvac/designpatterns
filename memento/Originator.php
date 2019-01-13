<?php

class Originator {

    private $estado;

    public function guardar()
    {
        return new Memento($this->estado);
    }

    /**
     * @param Memento $m
     */
    public function restaurar(Memento $m)
    {
        $this->estado = $m->getEstado();
    }

    public function setEstado(Juego $estado)
    {
        $this->estado = $estado;
    }

    public function getEstado()
    {
        return $this->estado;
    }
}