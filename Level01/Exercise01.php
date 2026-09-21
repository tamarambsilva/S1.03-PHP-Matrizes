<?php

// Crea una matriz, añade 5 números enteros a ella y, 
// a continuación, muéstralos en pantalla uno por uno.

$matriz = array(10, 20, 30, 40, 50);

for ($i = 0; $i < count($matriz); $i++) {
    echo $matriz[$i] . "\n";
}   