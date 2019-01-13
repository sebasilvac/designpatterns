<?php

class Caretaker {

    private $mementos = array();

    public function addMemento(Memento $m)
    {
        array_push($this->mementos, $m);
    }

    public function getMemento($index)
    {
        return $this->mementos[$index];
    }
}