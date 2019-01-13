<?php

require_once "HumanoInterface.php";

abstract class ArmaduraDecorator implements HumanoInterface {

    protected $_humano;

    public function __construct(HumanoInterface $humano)
    {
        $this->_humano = $humano;
    }
}