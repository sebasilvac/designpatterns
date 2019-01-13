<?php

class Contexto {

    private $strategy;

    public function __construct(EstrategyInterface $estrategy)
    {
        $this->strategy = $estrategy;
    }

    public function ejecutar()
    {
        $this->strategy->analizar();
    }
}