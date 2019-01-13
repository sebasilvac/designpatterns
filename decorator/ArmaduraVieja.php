<?php

require_once "ArmaduraDecorator.php";

class ArmaduraVieja extends ArmaduraDecorator {

    public function ataca()
    {
        return $this->_humano->ataca() + 5;
    }

    public function defiende()
    {
        return $this->_humano->defiende() + 10;
    }
}