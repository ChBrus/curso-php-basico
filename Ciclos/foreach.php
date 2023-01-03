<?php

/*
    Foreach
    - Se utiliza mucho en los arreglos
    - Recorre cualquier elemento que sea iterable sin tener que contar los elementos del mismo
    - En esté tipo de ciclado puedes recorrer un arreglo sin necesidad de poner que tan largo es tu arreglo

    Sintáxis:
    foreach ($arreglo as $valor) {
        # Código a repetir por cada valor
    }
*/

$tiendita_de_cafes = array(
    "Americano" => 20,
    "Latte" => 25,
    "Recalentado" => 10,
    "Capuccino" => 27.5,
    "Mocca" => 24
);

// Esté foreach solo te imprime el precio del café
foreach ($tiendita_de_cafes as $price) {
    echo  "El café en cuestión cuesta $$price USD" . "\n";
}

// Esté foreach te imprime el nombre del café y el precio del café
foreach ($tiendita_de_cafes as $cafe => $precio) {
    if($cafe == "Recalentado") {
        continue; # Se salta al siguiente ciclo (En este caso no va a decir que el café 'Recalentado' está muy rico XD)
    }
    
    echo "El café $cafe es muy rico! \n";

    // if($cafe == "Latte") {
    //     echo "!Encontramos a Latte!";
    //     break; # Hace que el ciclado termine de ejecutarse (No importa si no ha terminado de recorrer todo el arreglo)
    // }
}

echo "\n";