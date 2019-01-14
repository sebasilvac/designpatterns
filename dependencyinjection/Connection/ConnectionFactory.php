<?php

require_once "ConnectionMySql.php";
require_once "ConnectionOracle.php";
require_once "ConnectionPostgreSQL.php";
require_once "ConnectionEmpty.php";

class ConnectionFactory {

    public function getConection($motor)
    {
        switch ($motor){

            case 'MySql': return new ConnectionMySql(); break;
            case 'Oracle': return new ConnectionOracle(); break;
            case 'PostgreSQL': return new ConnectionPostgreSQL(); break;

            default: return new ConnectionEmpty();
        }
    }
}