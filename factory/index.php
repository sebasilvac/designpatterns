<?php

require_once "ConectionFactory.php";

$factory = new ConnectionFactory();

$con1 = $factory->getConection("MySql");
$con1->conectar();
$con1->desconectar();

$con1 = $factory->getConection("Oracle");
$con1->conectar();
$con1->desconectar();

$con1 = $factory->getConection("PostgreSQL");
$con1->conectar();
$con1->desconectar();