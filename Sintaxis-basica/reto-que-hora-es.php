<?php

// Coso feo que ya no necesito
// $segundos = readline("Ingresa el tiempo en segundos: ");

// $horas = (int) ($segundos / 3600);
// $segundos = (int) ($segundos % 3600);
// $minutos = (int) ($segundos / 60);
// $segundos = (int) ($segundos % 60);

// echo "Horas: $horas \nMinutos: $minutos \nSegundos: $segundos";

// Reto que me puso el profe del curso este de Platzi >:)

echo "-----Transformador a segundos-----" . "\n\n";
$totalSegundos = 0;
$horas = readline("Ingresa la cantidad de horas: ");
$minutos = readline("Ingresa la cantidad de minutos: ");
$segundos = readline("Ingresa la cantidad de segundos: ");

$totalSegundos += ($horas * 3600);
$totalSegundos += ($minutos * 60);
$totalSegundos += $segundos;

echo "Hay un total de: $totalSegundos segundos";

echo "\n";