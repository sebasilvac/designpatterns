<?php

class Subject {

    private $observadores = array();
    private $estado;

    public function getEstado()
    {
        return $this->estado;
    }

    public function setEstado($estado)
    {
        $this->estado = $estado;
        $this->notifyToObserver();
    }

    public function agregar( ObserverAbstract $observador )
    {
        array_push($this->observadores, $observador);
    }

    private function notifyToObserver()
    {
        foreach ($this->observadores as $observer){
            $observer->actualizar();
        }
    }
}