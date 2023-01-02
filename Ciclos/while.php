<?php

/*
    Nunca hagan esto XD que se repite el ciclo de forma infinita

    while(true) {
        echo "Este curso está increíble";
    }
*/

$contador = 1;

while($contador <= 10) {
    // echo "Este curso está increíble" . "\n";
    echo "Actualmente estamos en la iteración $contador \n";
    $contador++;
}

echo "\n";