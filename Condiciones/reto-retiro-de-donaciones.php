<?php

echo "---------- Twitch Mexicano B) ----------\n";
echo "|     Retirar dinero                    \n";

/*
    Notas
    - El intval funciona para transformar un dato de cualquier tipo a Entero
    - readline te regresa lo que haya escrito el usuario pero de tipo String
*/
$total_de_donaciones = intval(readline("| Cantidad total de donaciones: "));

if (is_integer($total_de_donaciones)) {
    $total_a_retirar =  $total_de_donaciones > 100 ? intval(readline("| Introduzca cantidad a retirar: ")) : 0;
    echo "| Usted ha recibido " . (is_int($total_a_retirar) ? $total_a_retirar : 0) . " dólares";
} else {
    echo "| [ERROR]: No es posible retirar";
}

echo "\n";