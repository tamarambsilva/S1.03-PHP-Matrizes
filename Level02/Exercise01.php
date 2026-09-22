<?php

// Imagina que tienes dos listas de invitados (representados/as únicamente por nombres). Haz un programa que te devuelva:

// La lista de invitados en común entre ambas listas.
// La mezcla de la lista de invitados (sin repeticiones).
// La lista de invitados exclusivos de la primera lista.
// La lista de invitados exclusivos de la segunda lista.

$invidados1 = array("Tamara", "Joao", "Pedro", "Maria", "Ana");

$invidados2 = array("Tamara", "Joao", "Luiz", "Marcos", "Ana");

$resultado = array_intersect($invidados1, $invidados2);

$resultadoMezcla = array_unique(array_merge($invidados1, $invidados2)); 

$resultadoExclusivo1 = array_diff($invidados1, $invidados2);

$resultadoExclusivo2 = array_diff($invidados2, $invidados1);

echo "______________________________________________________" . PHP_EOL;
echo "Los invitados que están en ambas listas son:" . PHP_EOL;
foreach ($resultado as $invitado) {
    echo $invitado . PHP_EOL;
}
echo "______________________________________________________" . PHP_EOL;

echo "La mezcla de las listas de invitados (sin repeticiones) es:" . PHP_EOL;
foreach ($resultadoMezcla as $invitado) {
    echo $invitado . PHP_EOL;
}
echo "______________________________________________________" . PHP_EOL;

echo "Los invitados exclusivos de la primera lista son:" . PHP_EOL;
foreach ($resultadoExclusivo1 as $invitado) {
    echo $invitado . PHP_EOL;
}
echo "______________________________________________________" . PHP_EOL;

echo "Los invitados exclusivos de la segunda lista son:" . PHP_EOL;
foreach ($resultadoExclusivo2 as $invitado) {       
    echo $invitado . PHP_EOL;
}
echo "______________________________________________________" . PHP_EOL;






