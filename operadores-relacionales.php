<?php

$a = 5;
$b = 5;
$b2 = "5";
$c = 9;
$d = 2;

// == Igualdad (Valores)
var_dump( $a == $b2);

// === Idéntico (Valores y tipos)
var_dump( $a === $b2);

// != Diferente (Valor)
var_dump( $a != $b);
var_dump( $a != $b2);

// !== Diferente (Valor y tipo)
var_dump( $a !== $b);
var_dump( $a !== $b2);

// < Menor que
var_dump( $a < $b);
var_dump( $c < $b);
var_dump( $d < $b);

// > Mayor que
var_dump( $a > $b);
var_dump( $c > $b);
var_dump( $d > $b);

// >= Mayor o igual que
var_dump( $a >= $b);
var_dump( $c >= $b);
var_dump( $d >= $b);

// >= Mayor o igual que
var_dump( $a <= $b);
var_dump( $c <= $b);
var_dump( $d <= $b);

/* 
    <=> Nave espacial 
    - Devuelve -1 sí el número que está a la izquierda es menor que el número que está a la derecha
    - Sí los 2 son iguales te devuelve 0
    - Sí el número que está a la izquierda es mayor, te devuelve 1
*/

echo 2 <=> 1; // 1
echo 1 <=> 1; // 0
echo -50 <=> 1; //-1

// ?? Fusión de null (Sí una variable no está definida, utiliza la otra)

$edad_de_pepito = 23;

echo $edad_de_juanito ?? $edad_de_pepito ?? $edad_de_jaimito;

echo "\n";