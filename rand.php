<?php
$valor =rand(1,5);
/*
//Almacena en una variable un valor aleatorio entre 1 y 5

if($valor %2  == 0) {//Analiza el resto de dividir por 2, todo numero divisible por 2 es par
echo"El numero $valor es par";
} else{
    echo "el numero $valor es impar";
}

echo $valor == 1 || $valor == 3 || $valor == 5 ? "El numero $valor es par" ; "El numero $valor es impar";
*/

if ($valor == 1 || $valor == 3 || $valor == 5) {
    echo "el numero $valor es impar";
} 
else{
    echo "el numero $valor es par";
}
