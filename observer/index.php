<?php

    require_once "Subject.php";
    require_once "PesoObserver.php";
    require_once "PesoArgObserver.php";
    require_once "SolObserver.php";

    $subject = new Subject();

    new PesoObserver($subject);
    new PesoArgObserver($subject);
    new SolObserver($subject);

    echo "si desea cambiar 10 dólares obtendrás : <br>";
    $subject->setEstado(10);

    echo "<br>si desea cambiar 100 dólares obtendrás : <br>";
    $subject->setEstado(100);
