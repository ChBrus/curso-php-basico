<?php
    /*
        Recuerden que estos son retos que me ponen en el curso :^
    */

    echo "---------- Burnito maps ----------" . "\n";
    $caminosTiendaAnterior = 0;
    $destino = 0;
    $caminos = 1;

    for ($i=1; $i < 10; $i++) {
        echo " | Tienda $i | " . ($i == 1 ? "(Destino)" : "") . "\n";
    }

    echo "\n";

    do {
        $destino = intval(readline("Punto de destino: "));
    } while ($destino < 2);

    for ($i=2; $i <= $destino; $i++) {
        $temporal = $caminos;
        $caminos += $caminosTiendaAnterior;
        $caminosTiendaAnterior = $temporal;
        // echo "\n" . "Temporal: $temporal | Caminos: $caminos | Caminos-tienda-anterior: $caminosTiendaAnterior";
    }

    echo "\n" . "Tienes $caminos caminos para llegar a tu destino";

    echo "\n";
?>