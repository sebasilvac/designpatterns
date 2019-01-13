<?php

require_once "CuentaInterface.php";

class CuentaBancoB implements CuentaInterface {

    public function retirarDinero(Cuenta $cuenta, $monto)
    {
        $saldoActual = $cuenta->monto - $monto - 10;
        $cuenta->monto = $saldoActual;
        return $cuenta;
    }

    public function depositarDinero(Cuenta $cuenta, $monto)
    {
        $saldoActual = $cuenta->monto + $monto + 0.5;
        $cuenta->monto = $saldoActual;
        return $cuenta;
    }

    public function mostrarSaldo(Cuenta $cuenta)
    {
        echo $cuenta->monto;
    }
}