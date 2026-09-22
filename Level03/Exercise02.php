<?php

// Dado un array de strings, haz un programa que:

// Devuelva un array donde sólo estén los strings que tengan un nombre par de caracteres usando la función array_filter().

$strings = array("escuela", "alunos", "php", "programacion", "exercise");

function tieneNombrePar($string)
{
    return strlen($string) % 2 === 0;
}

$resultado = array_filter($strings, 'tieneNombrePar');
print_r($resultado);
