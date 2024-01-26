<?php 
ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);

//Definicion
function calcularNeto($bruto, $dias){
 return $bruto * $dias;
}


//uso

echo "El sueldo es $ " . calcularNeto(80000, 30);
?>