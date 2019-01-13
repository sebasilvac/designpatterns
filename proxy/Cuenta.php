<?php


class Cuenta {

    public $idCuenta;
    public $idUsuario;
    public $monto;

    public function __construct($idUsuario, $idCuenta, $monto)
    {
        $this->idCuenta = $idCuenta;
        $this->idUsuario = $idUsuario;
        $this->monto = $monto;

    }
}