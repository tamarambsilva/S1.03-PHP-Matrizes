<?php

// Dado un array de enteros, haz un programa que nos devuelva la 
// suma de los enteros del array que sean primeros utilizando la 
// función array_reduce().

$numeros = array(2, 3, 4, 5, 6, 7, 8, 9, 10);

function esPrimo($n)
{
    if ($n <= 1) {
        return false;
    }
    if ($n <= 3) {
        return true;
    }
    if ($n % 2 == 0 || $n % 3 == 0) {
        return false;
    }
    for ($i = 5; $i * $i <= $n; $i += 6) {
        if ($n % $i == 0 || $n % ($i + 2) == 0) {
            return false;
        }
    }
    return true;
}

function sumarPrimos($carry, $item)
{
    if (esPrimo($item)) {
        $carry += $item;
    }
    return $carry;
}

$sumaPrimos = array_reduce($numeros, 'sumarPrimos', 0);
echo "La suma de los números primos es: " . $sumaPrimos . PHP_EOL;