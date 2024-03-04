<?php
//array_map
$notas = [23,45,7,5];
 
//primera forma
function mul($num) {
    return $num *= 2;
}
$resul = array_map("mul", $notas);
//print_r($resul);

//segunda forma con funciones anonimas.
$resul2 = array_map(function ($num) {
    return $num *= 2;
}, $notas);
//print_r($resul2);

//tercera forma con funcion flecha
$resul3 = array_map(fn ($num) => $num *= 2, $notas);
print_r($resul3);