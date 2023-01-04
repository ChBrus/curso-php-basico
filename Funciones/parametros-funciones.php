<?php

function es_estudiante_legend($platzi_rank) {
    if($platzi_rank >= 20000) {
        echo "¡Eres un estudiante Legend!";
    } else {
        echo "Lo sentimos, aún no alcanzas el nivel Legend :c";
    }
    echo "\n";
}

// Un ciclo que se repetirá indefinidamente
do {
    $platzi_rank_user = (int) readline("Porfavor, introduce tu Platzi Rank: ");
    es_estudiante_legend($platzi_rank_user);
} while (true);

echo "\n";