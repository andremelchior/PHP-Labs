<?php
$valor=20;
$valor1;
$op = 'soma';

// if ($valor>0 || $valor1>0) {
//     switch ($op) {
//         case 'soma':
//             $result = $valor + $valor1; 
//             break;
        
//         default:
//             # code...
//             break;
//     }
// }else{
//     echo "falso";
// }

while ($valor > 10) {
    echo "<br>Valor:".$valor;
    $valor -= 1;
}

echo "<br>";

for ($i=20; $i >= 0; $i-=1) { 
    if ($i==0) {
        echo "<br>Mensagem";
    } else {
        echo "<br>Valor de i:".$i;
    }
}

?>