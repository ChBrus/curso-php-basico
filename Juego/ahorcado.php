<?php

function clear() {
    # OS es una propiedad global creada por PHP para saber en que Sistema Operativo se está ejecutando
    if (PHP_OS === "WINNT") {
        system("cls");
    } else {
        system("clear");
    }
}

function adjust_string($letter_pos) {
    $temporal = $letter_pos;
    $letter_pos++;
    return $letter_pos + $temporal;
}

$possible_words = ["Bebida", "Prisma", "Ala", "Dolor", "Piloto",
                   "Baldosa", "Terremoto", "Asteroide", "Gallo", "Platzi"];

define("MAX_ATTEMPTS", 6);

echo "😼 ¡Juego del ahorcado! \n\n";

# Inicializamos el juego

$choosen_word = $possible_words[ rand(0, count($possible_words) - 1) ]; # Count es un método que te regresa el total de datos guardados en un arreglo
$choosen_word = strtoupper($choosen_word);          # Convierte todas las letras en el string a mayúsculas
$word_length = strlen($choosen_word);               # Obtiene la cantidad de letras en un string
$covered_letters = str_pad("", $word_length * 2, "_ "); # Rellena un string de un tipo de carácter X cantidad de veces
$discovered_letters = 0;
$attempts = 0;

do {
    echo "$discovered_letters / $word_length letras \n\n";
    echo $covered_letters . "\n\n";
    
    // Pedimos al usuario que escriba
    $player_letter = readline("Escribe una letra: ");
    $player_letter = strtoupper($player_letter);
    
    # str_contains analiza si una letra existe en un string
    if (str_contains($choosen_word, $player_letter)) {
        # Verificamos todas las ocurrencias de esta letra para reemplazarla
    
        /*
            Strpos
            - Encuentra la posición de la primera ocurrencia de un substring en un string
        */
        $offset = 0;
        while( ($letter_position = strpos($choosen_word, $player_letter, $offset)) !== false ) {
            $covered_letters[adjust_string($letter_position) - 1] = $player_letter;
            $discovered_letters++;
            $offset = $letter_position + 1;
        }
    } else {
        clear();
        $attempts++;
        echo "Letra incorrecta 🐱. Te quedan " . (MAX_ATTEMPTS - $attempts) . " intentos.";
        sleep(2); # Hace un delay de 2 segundos antes de seguir con el programa
    }

    clear();
    /*
        Similar_text
        - Retorna la cantidad de letras que resultaron similares entre un string y otro
    */
} while ($attempts < MAX_ATTEMPTS && similar_text($covered_letters, $choosen_word) != $word_length);

clear();

if($attempts < MAX_ATTEMPTS)
    echo "¡Felicidades! Has adivinado la palabra. 🙀 \n\n";
else
    echo "Suerte para la próxima, amigo. 😿 \n\n";

echo "La palabra era: $choosen_word \n";
echo "Lograste descubrir: $discovered_letters / $word_length letras \n";