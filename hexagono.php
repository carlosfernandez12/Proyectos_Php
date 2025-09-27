<?php
$tamano = 5; // controla el tamaño del hexágono

// Parte superior
for ($i = 0; $i < $tamano; $i++) {
    echo str_repeat(" ", $tamano - $i);
    echo str_repeat("*", $tamano + 2 * $i);
    echo PHP_EOL;
}

// Parte media
for ($i = 0; $i < $tamano; $i++) {
    echo str_repeat("*", $tamano * 3);
    echo PHP_EOL;
}

// Parte inferior
for ($i = $tamano - 1; $i >= 0; $i--) {
    echo str_repeat(" ", $tamano - $i);
    echo str_repeat("*", $tamano + 2 * $i);
    echo PHP_EOL;
}
