<?php

    require_once "Juego.php";
    require_once "Memento.php";
    require_once "Originator.php";
    require_once "Caretaker.php";

    $nombreJuego = "Assassin Creed";

    $juego = new Juego();
    $juego->nombre = $nombreJuego;
    $juego->checkpont = 1;

    # Caretaker se encarga de guardar en un array los estados del objecto Juego
    $caretaker = new Caretaker();

    # Originator puede guardar y restaurar el estado
    $originator = new Originator();

    $juego = new Juego();
    $juego->nombre = $nombreJuego;
    $juego->checkpont = 2;
    $originator->setEstado($juego);

    $juego = new Juego();
    $juego->nombre = $nombreJuego;
    $juego->checkpont = 3;
    $originator->setEstado($juego);


    /**
     * $originator->guardar retorna un Memento con el estado del juego,
     * este estado se guarda al llamar al metodo $originator->setEstado($juego);
     *
     * $caretaker->addMemento guarda en un array un objecto Memento con el estado del Juego
     */
    $caretaker->addMemento( $originator->guardar() ); // estado enposición 0

    $juego = new Juego();
    $juego->nombre = $nombreJuego;
    $juego->checkpont = 4;
    $originator->setEstado($juego);

    # Guardamos el estado del juego
    $caretaker->addMemento( $originator->guardar() ); // estado posición 1

    $juego = new Juego();
    $juego->nombre = $nombreJuego;
    $juego->checkpont = 5;
    $originator->setEstado($juego);
    $caretaker->addMemento( $originator->guardar() ); // estado posición 2

    $originator->setEstado($juego);
    $originator->restaurar($caretaker->getMemento(2));
    $juego = $originator->getEstado();

    echo $juego;