<?php

require_once "Cuenta.php";

interface CuentaInterface {

    public function retirarDinero( Cuenta $cuenta, $monto );
    public function depositarDinero( Cuenta $cuenta, $monto );
    public function mostrarSaldo( Cuenta $cuenta );
}