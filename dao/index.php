<?php

    require_once "Persona.php";
    require_once "PersonaDAO.php";

    require_once "Medico.php";
    require_once "MedicoDAO.php";

    $dao = new PersonaDAO();

    $lista = $dao->listarTodos();

    echo "<pre>";
    foreach ($lista as $persona){
        print_r($persona);
    }

    echo "<br>";

    $persona = new Persona();
    $persona->setId(3);
    $persona->setNOmbres("Nombres de ejemplo");

    $dao->registrar($persona);

    $dao->actualizar($persona);
    $dao->eliminar($persona->getId());


    $dao = new MedicoDAO();

    $lista = $dao->listarTodos();

    echo "<pre>";
    foreach ($lista as $medico){
        print_r($medico);
    }

    echo "<br>";

    $medico = new Medico();
    $medico->setId(3);
    $medico->setNOmbres("Médico Ejemplo");

    $dao->registrar($medico);

    $dao->actualizar($medico);
    $dao->eliminar($medico->getId());
    $dao->curar($medico);



