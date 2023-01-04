<?php

$precios_de_cafes = [12, 56, 32, 89, 2, 1];

// Aquí podemos ver como se ve el arreglo ante de ser ordenado de menor a mayor
print_r($precios_de_cafes);

/*
    Método usort
    - Este método es capaz de acomodar un arreglo sin regresar un nuevo arreglo
    - Su primer parámetro es el arreglo a modificar
    - Su segundo parámetro es una función, si, oíste bien, una función XD
    - Estás funciones tambien son llamadas "Funciones anónimas", porque no es necesario ponerle un nombre
    - Está función se crea al momento de declararla y se destruye cuando ya no esta siendo utilizada
    - Usort recorre todo el arreglo (Uno por uno) y cada vez que recorre el arreglo, le decimos sí el
      número actual es menor, mayor o igual al siguiente
    - Usort sabrá si es menor sí la función retorna un número menor a 0
    - Usort sabra si el número es mayor sí la función retorna un número mayor a 0
    - Usort sabrá si los 2 números son iguales sí la función retorna un 0
*/
usort($precios_de_cafes, function ($a, $b) {
    return $a <=> $b;
});

echo "\n";
print_r($precios_de_cafes);

echo "\n";