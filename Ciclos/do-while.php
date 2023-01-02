<?php

// do {
//     echo "Esto se ejecuta por lo menos una vez";
// } while (false);

$usernames = ["Pepito123", "Mr.Michi", "RetaxMain"];

// Siempre y cuando el nombre de usuario esté en el arreglo se va a repetir, sí no está repetido pus lo agregamos al arreglo
do {
    $username = readline("Por favor, ingresa tu nuevo nombre de usuario: ");
} while (in_array($username, $usernames));

// Guarda el nombre de usuario en el arreglo
array_push($usernames, $username);

echo "\n";