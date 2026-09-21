<?php

// Haz un programa que tenga un array indexado de 6 elementos y después:

// Muestre por pantalla el tamaño del array anterior.
// Elimine un elemento del array anterior. Comprueba que los índices/claves del array estén normalizados (se deben reorganizar sus índices para que no haya saltos entre índices).
// Muestre por última vez el tamaño del array y su contenido.

$matriz = array(10, 20, 30, 40, 50, 60);
echo "Tamaño inicial: " . count($matriz) . PHP_EOL;

unset($matriz[2]); // Elimina el elemento en el índice 2
$matriz = array_values($matriz); // Normaliza los índices

echo "Tamaño del array después de eliminar un elemento: " . count($matriz) . PHP_EOL;
echo "Contenido del array después de eliminar un elemento:" . PHP_EOL;
for ($i = 0; $i < count($matriz); $i++) {
    echo $matriz[$i] . PHP_EOL;
}