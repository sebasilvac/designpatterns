<?php

class Juego {

    public $nombre;

    public $checkpont;

    public function __toString()
    {
        return "Nombre: {$this->nombre}, checkpont: {$this->checkpont}";
    }
}