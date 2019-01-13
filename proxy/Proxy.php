<?php
require_once "CuentaInterface.php";

class Proxy implements CuentaInterface {

    private $cuentaReal;

    public function __construct( CuentaInterface $cuentaReal )
    {
        $this->cuentaReal = $cuentaReal;
    }

    public function retirarDinero(Cuenta $cuenta, $monto)
    {
        echo "Se retiran $ {$monto} <br>";

        return $this->cuentaReal->retirarDinero($cuenta, $monto);
    }

    public function depositarDinero(Cuenta $cuenta, $monto)
    {
        echo "Se depositan $ {$monto} <br>";

        return $this->cuentaReal->depositarDinero($cuenta, $monto);
    }

    public function mostrarSaldo(Cuenta $cuenta)
    {
        echo "Se consulta saldo <br>";

        return $this->cuentaReal->mostrarSaldo($cuenta);
    }
}