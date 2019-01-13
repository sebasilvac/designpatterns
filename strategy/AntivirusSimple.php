<?php

require_once "AnalisisSimpleAbstract.php";

class AntivirusSimple extends AnalisisSimpleAbstract {

    public function iniciar()
    {
        echo "<br>Antivirus Simple - análisis simple iniciado. <br>";
    }

    public function saltarZip()
    {
        echo "Analizando...<br>";
        sleep(2);
        echo "No se pudo analizar archivos ZIP<br>";
    }

    public function detener()
    {
        echo "Antivirus Simple - Análisis simple finalizado.<br>";
    }
}