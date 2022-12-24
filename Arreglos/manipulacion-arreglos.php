<?php

$edades = [18, 22, 40, 34];

/*
    Count
    - Cuenta cuantos elementos hay en el arreglo
*/

echo count($edades);

/*
    Array Push
    - Agrega un elemento al final del arreglo
*/

array_push($edades, 16);
print_r($edades);

/*
    Is Array
    - Ve si alguna variable es un arreglo
*/

$esto_no_es_un_arreglo = "";
var_dump(is_array($esto_no_es_un_arreglo));
var_dump(is_array($edades));

/*
    Explode
    - Convierte un String en un arreglo
*/

$lista_de_frutas = "Fresa,Cereza,Manzana";
$lista_de_frutas_array = explode(",", $lista_de_frutas);

var_dump($lista_de_frutas_array);

/*
    Implode
    - Es lo opuesto a explode, convierte un arreglo en un string
*/

$lista_de_frutas2_array = ["Fresa","Cereza","Manzana"];
$lista_de_frutas2 = implode(",", $lista_de_frutas_array);

var_dump($lista_de_frutas);

echo "\n";