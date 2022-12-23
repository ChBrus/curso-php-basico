<?php

// Operador de asignación

$edad_de_jaimito = ($edad_de_pepito = 18) + 5;

echo "La edad de Pepito es $edad_de_pepito \n";
echo "La edad de Jaimito es $edad_de_jaimito";

// Operadores de incremento

$contador = 1;

echo $contador . "\n";

$contador = $contador + 1;
$contador += 1;
$contador++;

/* 
    += (Asigna un valor a la variable)
    -= (Resta un valor a la variable)
    *= (Multiplica un valor a la variable)
    /= (Divide un valor a la variable)
*/

$nombre = "Bruno";
$nombre .= " Carrillo";

echo $nombre;

$contador = 1;
$resultado = $contador++;

echo $contador . "\n";
echo $resultado;

echo "\n";