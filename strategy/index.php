<?php

require_once "Contexto.php";
require_once "AntivirusSimple.php";
require_once "AntivirusAvanzado.php";

/**
 * Nos permite cambiar el algoritmo o el conjunto de algoritmos,
 * según las necesidades
 *
 * también se puede usar el patrón factory, para en vez de enviar una instancia
 * de un tipo de antivirus, enviar un parametro para generar la instancia adecuada
 */
$contexto = new Contexto( new AntivirusAvanzado() );
$contexto->ejecutar();