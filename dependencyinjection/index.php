<?php

/**
 * Vamos a suponer que la clase DAO necesita una conección a la BD para trabajar
 */

require_once "Connection/ConnectionFactory.php";
require_once "DAO/Persona.php";
require_once "DAO/PersonaDAO.php";

$factory = new ConnectionFactory();


$con1 = $factory->getConection('MySql');

$dao = new PersonaDAO();
$dao->setConnection($con1);

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

