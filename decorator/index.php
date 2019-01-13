<?php
    require_once "Caballero.php";
    require_once "ArmaduraVieja.php";
    require_once "EspadaLegendaria.php";

    $caballero = new Caballero();
    $ataca = $caballero->ataca();
    $defiende = $caballero->defiende();

    echo "Es un caballero común y sonriente <br>";
    echo "<br> El caballero ataca: {$ataca}. <br> El caballero se defiende con: {$defiende}.<br>";

    $caballero = new ArmaduraVieja($caballero);
    $ataca = $caballero->ataca();
    $defiende = $caballero->defiende();

    echo "Se equipa con una armadura vieja que ha encontrado tirada en el suelo <br>";
    echo "<br> El caballero ataca: {$ataca}. <br> El caballero se defiende con: {$defiende}.<br>";


    $caballero = new EspadaLegendaria($caballero);
    $ataca = $caballero->ataca();
    $defiende = $caballero->defiende();

    echo "Y como tiene tanta cuea, se ha encontrado una espada legendaria ( chachaan (8) ) <br>";
    echo "<br> El caballero ataca: {$ataca}. <br> El caballero se defiende con: {$defiende}.<br>";


    echo "<br><br>EL patrón DECORATOR añade atributos o métodos a una clase<br>sin que esta tenga que ser modificada";