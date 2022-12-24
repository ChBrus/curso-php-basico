<?php

$michis_felinos = true;
$michis_4_patas = true;
$michis_vuelan = false;
$michis_progragraman_con_PHP = false;

// && (And) y || (Or)

// var_dump($michis_felinos and $michis_4_patas);
// var_dump($michis_4_patas or $michis_vuelan);
// var_dump($michis_felinos && $michis_4_patas);
// var_dump($michis_4_patas || $michis_vuelan);

// ! (Not)
var_dump( !$michis_4_patas );

// Experimento que te va a hacer decir Whaaaaaaaaaaat

$resultado = $michis_4_patas and $michis_progragraman_con_PHP;

var_dump($resultado);

echo "\n";