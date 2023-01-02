<?php

// $edades = [
//     "Bruno" => 16,
//     "Mr.Michi" => 18,
//     "Juan" => 40
// ];

// echo "La edad de Mr.Michi es " . $edades["Mr.Michi"];

$cafes = array(
    "Capuccino" => 50,
    "Latte" => 49,
    "Americano" => 70
);

// echo "El precio del café Americano es de {$cafes['Americano']}";

/*
    - Este es un array de arrays, o como mejor se conoce "Matriz",
      que tambien podría decirse que es un arreglo de objetos XD que loco no?
    - Para saber como se dividen estos elementos es viendo las comas que hay ahí y los paréntesis.
    - A la izquierda del signo => está el nombre que tendrá el subíndice del
      arreglo (por defecto nada más son números ordenados iniciando desde 0).
    - A la derecha del signo => es el valor que tendrá esa parte del subíndice
*/
$personas = array(
    "Carlos" => array(
        "edad" => 20,
        "apellido" => "Santana"
    ),
    "Mr.Michi" => array(
        "edad" => 18,
        "apellido" => "Michisancio"
    )
);

// Está es una forma bien rara de escribir el dato de un arreglo sin necesidad de hacerle una concatenación, ta bien chido :O
echo "La información de Mr. Michi es: Edad({$personas['Mr.Michi']['edad']}) Apellido({$personas['Mr.Michi']['apellido']})";

echo "\n";