<?php
//ternario
$a = 3;
 $resul = $a === '3' ? 1: 0;
 echo $resul; 

 $numr = [1,4,6,8,0];
function duplicar($num) {
    return $num * 2;
}

$resul = array_map("duplicar", $numr);
print_r($resul);

$res = array_map(function ($num){
    return $num ** 2;
}, $numr);

print_r($res);

foreach ($variable as $key => $value) {
    # code...
}