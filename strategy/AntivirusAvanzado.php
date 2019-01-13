<?php

require_once "AnalisisAvanzadoAbstract.php";

class AntivirusAvanzado extends AnalisisAvanzadoAbstract {

    public function iniciar()
    {
        echo "<br>Antivirus Avanzado - análisis avanzado iniciado<br>";
    }

    public function analizarMemoria()
    {
        echo "Analizando Memoria RAM<br>";
        sleep(2);
    }

    public function analizarKeyLogger()
    {
        echo "Analizando KeyLoggers<br>";
        sleep(2);
    }

    public function analizarRootKit()
    {
        echo "Analizando RootKits<br>";
        sleep(2);
    }

    public function descomprimirZip()
    {
        echo "Analizando Archivoz ZIP<br>";
        sleep(2);
    }

    public function detener()
    {
        echo "Antivirus Avanzado - Análisis avanzado finalizado<br>";
    }
}