<?php

require_once "CRUDDAOInterface.php";

interface MedicoDAOInterface extends CRUDDAOInterface {

    public function curar($medico);
}