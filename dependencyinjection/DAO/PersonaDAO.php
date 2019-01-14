<?php

//require_once "../Connection/ConnectionFactory.php";
require_once "PersonaDaoInterface.php";
require_once "Persona.php";

class PersonaDAO implements PersonaDaoInterface {

    private $connectionToBD;

    public function listarTodos()
    {
        $lista = array();

        $persona = new Persona();
        $persona->setId(1);
        $persona->setNOmbres("Seba Silva");

        array_push($lista, $persona);

        $persona = new Persona();
        $persona->setId(1);
        $persona->setNOmbres("Segunda persona");

        array_push($lista, $persona);

        return $lista;
    }

    public function obtenerPorId($id)
    {
        return null;
    }

    public function registrar($persona)
    {
        echo "Persona {$persona->getNombres()} registrada <br>";
    }

    public function actualizar($persona)
    {
        echo "Persona {$persona->getNombres()} actualizada <br>";
    }

    public function eliminar($id)
    {
        echo "Persona con ID: {$id} eliminada <br>";
    }

    public function setConnection(ConnectionInterface $con)
    {
        $this->connectionToBD = $con;
        $this->connectionToBD->conectar();
    }
}