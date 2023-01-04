<?php

$possible_words = ["Bebida", "Prisma", "Ala", "Dolor", "Piloto",
                   "Baldosa", "Terremoto", "Asteroide", "Gallo", "Platzi"];

define("MAX_ATTEMPTS", 6);

echo "😼 ¡Juego del ahorcado! \n\n";

# Inicializamos el juego

$choosen_word = $possible_words[ rand(0, count($possible_words) - 1) ]; # Count es un método que te regresa el total de datos guardados en un arreglo
$choosen_word = strtoupper($choosen_word);          # Convierte todas las letras en el string a mayúsculas
$word_length = strlen($choosen_word);               # Obtiene la cantidad de letras en un string
$covered_letters = str_pad("", $word_length, "_ "); # Rellena un string de un tipo de carácter X cantidad de veces
$discovered_letters = 0;
$attempts = 0;

echo "$discovered_letters / $word_length letras \n\n";
echo $discovered_letters . "\n\n";

// Pedimos al usuario que escriba
$player_letter = readline("Escribe una letra");
$player_letter = strtoupper($player_letter);

echo "\n";