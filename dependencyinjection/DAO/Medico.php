<?php

class Medico {

    private $id;
    private $nombres;

    public function getId()
    {
        return $this->id;
    }

    public function getNombres(){
        return $this->nombres;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setNOmbres($nombres)
    {
        $this->nombres = $nombres;
    }
}