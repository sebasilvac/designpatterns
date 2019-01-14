<?php

    interface CRUDDAOInterface {

        public function listarTodos();
        public function obtenerPorId($id);
        public function registrar($persona);
        public function actualizar($persona);
        public function eliminar($id);

        public function setConnection(ConnectionInterface $con);
    }