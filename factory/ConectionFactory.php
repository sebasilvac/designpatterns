<?php

require_once "ConectionMySql.php";
require_once "ConectionOracle.php";
require_once "ConectionPostgreSQL.php";
require_once "ConectionEmpty.php";

class ConectionFactory {

    public function getConection($motor)
    {
        switch ($motor){

            case 'MySql': return new ConectionMySql(); break;
            case 'Oracle': return new ConectionOracle(); break;
            case 'PostgreSQL': return new ConectionPostgreSQL(); break;

            default: return new ConectionEmpty();
        }
    }
}