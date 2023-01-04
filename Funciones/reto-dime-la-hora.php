<?php

function obtenerHora() {
    return date("G:i");
}

echo "!Hola¡ ¿Me podrías decir qué hora es? \n";
echo "!Claro¡ Son las " . obtenerHora();

echo "\n";