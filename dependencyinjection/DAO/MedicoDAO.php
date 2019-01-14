<?php

require_once "MedicoDAOInterface.php";
require_once "Medico.php";

class MedicoDAO implements MedicoDAOInterface {

    private $connectionToBD;

    public function listarTodos()
    {
        $lista = array();

        $medico = new Medico();
        $medico->setId(1);
        $medico->setNOmbres("Seba Silva");

        array_push($lista, $medico);

        $medico = new Medico();
        $medico->setId(1);
        $medico->setNOmbres("Segundo médico");

        array_push($lista, $medico);

        return $lista;
    }

    public function obtenerPorId($id)
    {
        return null;
    }

    public function registrar($medico)
    {
        echo "Médico {$medico->getNombres()} registrado <br>";
    }

    public function actualizar($medico)
    {
        echo "Médico {$medico->getNombres()} actualizado <br>";
    }

    public function eliminar($id)
    {
        echo "Médico con ID: {$id} eliminado <br>";
    }

    public function curar($medico)
    {
        echo "Médico ha empezado a curar a sus pacientes";
    }

    public function setConnection(ConnectionInterface $con)
    {
        $this->connectionToBD = $con;
        $this->connectionToBD->conectar();
    }
}