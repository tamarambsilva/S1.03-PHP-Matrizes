<?php

// Crea un programa que liste las notas de los/as alumnos/as de una clase. 
// Por eso deberemos utilizar un array asociativo donde la clave será el 
// nombre de cada alumno. Cada alumno tendrá 5 notas (valoradas del 0 al 10).

// Además, crea una función que, dadas las notas de todos los alumnos/as, 
// nos muestre tanto la media de la nota de cada alumno, como la nota media de la clase entera.


$alumnos = array(
    "Tamara" => array(8, 7, 9, 10, 8),
    "Joao" => array(6, 7, 5, 8, 7),
    "Maria" => array(9, 8, 10, 9, 10)
);

function calcularMedias($alumnos)
{
    $totalSuma = 0;
    $totalNotas = 0;

    foreach ($alumnos as $nombre => $notas) {
        $suma = array_sum($notas);
        $media = $suma / count($notas);

        echo "Media de $nombre: " . $media . PHP_EOL;

        $totalSuma += $suma;
        $totalNotas += count($notas);
    }

    $mediaClase = $totalSuma / $totalNotas;


        echo "Media de la clase: " . number_format($mediaClase, 2) . PHP_EOL;
    }

calcularMedias($alumnos);