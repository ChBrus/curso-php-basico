<?php

/*
    De está manera podemos agregar valores por defecto a los parámetros en PHP
    $parametro = $valor
*/
function suma($a = 1, $b = 1) {
    return $a + $b;
}

echo suma(1, 2) . "\n"; # 3
echo suma(5, 8) . "\n"; # 13
echo suma(7, 22) . "\n"; # 29

// No van a dar error porque tienen valores por defecto los parámetros
echo suma(10) . "\n"; # 11
echo suma() . "\n"; # 2

/*
    Desempaquetar
    - Por muy extraño que suene de está manera podemos "fusionar" 2 arreglos para hacerlo
      1 matriz (O un arreglo de 3 dimensiones si hablamos de combinar 2 matrices)
    - Ejemplo:
    $arregloCombinado = [...$arreglo1, ...$arreglo2];

    - Los 3 puntitos son obligatorios si deseas combinar arreglos
*/
$arreglo1 = [1, 2, 3];
$arreglo2 = [4, 5, 6];

$resultado = [...$arreglo1, ...$arreglo2];

var_dump($resultado);

/*
    Otros ejemplos de desempaquetar
    - Tambien se pueden desempaquetar dentro de una función para obtener todos los datos del arreglo y
      pasarselos como parámetros
*/
function suma2($a, $b) {
    echo "La suma de $a + $b es: " . ($a + $b) . "\n";
}

$numeros = [1, 2];
$numeros2 = [50, 20];
$numeros3 = [10000, 2];

suma2(...$numeros); # 3
suma2(...$numeros2); # 70
suma2(...$numeros3); # 10002

/*
    Funciones con parámetros infinitos
    - Para poder declarar un parámetro en el cual puedas ponerle más de 1 valor en la misma función es de la siguiente manera:
    ...$parametro
    
    - Estos parámetros tecnicámente son arreglos como parámetros (Es así como guarda cualquier cantidad de parámetros que pongas)
*/
function suma_infinita(...$numeros) {
    $suma = 0;

    foreach ($numeros as $numero) {
        $suma += $numero;
    }

    echo "La sumatoria es: $suma \n";
}

suma_infinita(1, 2, 3, 4, 5, 6, 7, 8, 9, 10); # 55
suma_infinita(100, 40, 2, 9, 3); # 154

echo "\n";