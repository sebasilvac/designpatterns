<?php

require_once "ArmaduraDecorator.php";

class EspadaLegendaria extends ArmaduraDecorator {

    public function ataca()
    {
        return $this->_humano->ataca() + 50;
    }

    public function defiende()
    {
        return $this->_humano->defiende();
    }
}