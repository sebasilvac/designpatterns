<?php

require_once "Proxy.php";
require_once "CuentaBancoA.php";
require_once "CuentaBancoB.php";


$cuenta = new Cuenta(69, 1, 1000);

$proxy = new Proxy( new CuentaBancoA()  );

$cuenta = $proxy->retirarDinero($cuenta, 100);
$cuenta = $proxy->depositarDinero($cuenta, 500);

$proxy->mostrarSaldo($cuenta);

$cuenta = new Cuenta(69, 1, 1000);

$proxy = new Proxy( new CuentaBancoB()  );

$cuenta = $proxy->retirarDinero($cuenta, 100);
$cuenta = $proxy->depositarDinero($cuenta, 500);

$proxy->mostrarSaldo($cuenta);


echo "<br>El Proxy viene a ser un intermediario en el cual se le puede añadir funciones sin alterar la clase final<br>";