<?php 
ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);

$bruto = 50000; //ambito global

function calcularNeto(){
    return $bruto - $bruto *0.17; //ambito local
}

echo(calcularNeto())
?>
