<?php
$altura = 5; // número de filas de la pirámide

for ($i = 1; $i <= $altura; $i++) {
    // Espacios a la izquierda
    for ($j = $altura; $j > $i; $j--) {
        echo " ";
    }
    // Asteriscos
    for ($k = 1; $k <= (2 * $i - 1); $k++) {
        echo "*";
    }
    echo PHP_EOL; // salto de línea en consola
}