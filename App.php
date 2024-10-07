<?php

include  "Marcador.php";

$jugador1 = "Yannik Sinner";
$jugador2 = "Carlos alcaraz";
$resultado = array(7,6,4,6,7,6,6,1);

$marcador = new Marcador($resultado, $jugador1, $jugador2);

$marcador->ganador();
$marcador->mostrarResultado();
$marcador->setMayorDiferencia();

