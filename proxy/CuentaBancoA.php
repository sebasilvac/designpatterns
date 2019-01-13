<?php

require_once "CuentaInterface.php";

class CuentaBancoA implements CuentaInterface {

    public function retirarDinero(Cuenta $cuenta, $monto)
    {
        $saldoActual = $cuenta->monto - $monto;
        $cuenta->monto = $saldoActual;
        return $cuenta;
    }

    public function depositarDinero(Cuenta $cuenta, $monto)
    {
        $saldoActual = $cuenta->monto + $monto;
        $cuenta->monto = $saldoActual;
        return $cuenta;
    }

    public function mostrarSaldo(Cuenta $cuenta)
    {
        echo $cuenta->monto;
    }
}