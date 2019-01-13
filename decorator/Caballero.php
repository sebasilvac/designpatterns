<?php

require_once "HumanoInterface.php";

class Caballero implements HumanoInterface {

    private $defensa = 5;
    private $ataque = 5;

    public function ataca() {
        return $this->ataque;
    }

    public function defiende()
    {
        return $this->defensa;
    }

}