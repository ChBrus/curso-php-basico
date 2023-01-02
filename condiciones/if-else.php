<?php

// $asientos_disponibles = 4;
$asientos_disponibles = 0;
$es_hijo_de_tom_holland = false;
$conoce_a_tony_stark = true;

if ($asientos_disponibles > 0) {
    echo "Puedes ver la película de Spidey";
} else if($es_hijo_de_tom_holland == true) /* Si la variable booleana es verdadera */ {
    echo "No te creo XD, pero puedes ver la película";
} else if($conoce_a_tony_stark) /* Si la varuable booleana es verdadera, pero aquí es más corto y entendible */ {
    echo "Bueno, te creo, adelante";
} else {
    echo "Lo sentimos, te tocará spoilearte :C";
}

// Que extraños están los ejemplos XD

echo "\n";