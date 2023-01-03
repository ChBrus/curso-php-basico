<?php

    function get_pokemon() {
        // Fua viejo, una función que te genera un número aleatorio :O
        $numero_aleatorio = rand(1, 4);

        switch ($numero_aleatorio) {
            case 1:
                echo "Pikachu";
            break;
            case 2:
                echo "Charmander";
            break;
            case 3:
                echo "Mewtwo";
            break;
            default:
                echo "Lo siento, no hay pokemón para ti :c";
        }
        echo "\n";
    }

    for($i = 0; $i < 4; $i++)
    get_pokemon();

    echo "\n";