<?php

// Dado un array de enteros, haz un programa que:

// Devuelva cada valor del array elevado al cubo utilizando la función array_map().

$numeros = array(10, 20, 30, 40, 50);

function elevarAlCubo($numero)
{
    return pow($numero, 3);
}

$resultado = array_map('elevarAlCubo', $numeros);
print_r($resultado);    
