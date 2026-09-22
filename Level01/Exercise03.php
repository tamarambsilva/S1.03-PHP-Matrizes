<?php

// Crea una función que reciba como parámetros un 
// array de palabras y un carácter. La función nos 
// devuelve true si todas las palabras del array tienen 
// el carácter pasado como segundo parámetro.


$palabras = array("casa", "coche", "camino");

$caracter = "c";

function comprobarCaracter($array, $caracter)
{
    foreach ($array as $palabra) {

        // Comprueba si la palabra contiene el carácter
        if (!str_contains($palabra, $caracter)) {
            return false;
        }
    }

    return true;
}

if (comprobarCaracter($palabras, $caracter)) {

    echo "Todas las palabras contienen el carácter '$caracter'." . PHP_EOL;

} else {

    echo "No todas las palabras contienen el carácter '$caracter'." . PHP_EOL;
}