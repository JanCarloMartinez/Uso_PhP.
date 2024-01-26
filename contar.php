<?php

ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);

//Definicion
function contar($aArray) {

    $contador = 0;
    foreach ($aArray as $item){
            $contador ++;
    }
    return $contador ;

}

//uso

$aProductos = array();
$aProductos[] = array(
    "nombre" => "Smart TV 55\"4K UHD",
    "marca" => "Hitachi",
    "modelo" => "554KS20",
    "stock" => 60,
    "precio" => 58000


);
$aProductos[] = array(
    "nombre" => "Samsumg Galaxi A30 Blanco",
    "marca" => "Samsumg",
    "modelo" => "Galaxi A30",
    "stock" => 0,
    "precio" => 22000
);
$aProductos[] = array(
    "nombre" => "Aire Acondicionado Split Inverter Frio/Calor Surrey 2900F",
    "marca" => "Surrey",
    "modelo" => "553AIQ1201E",
    "stock" => 8,
    "precio" => 45000


);



$aProductos = array();
$aPacientes[] =array(
    "dni" => "33.765.012",
    "nombre" => "Luis Martinez",
    "edad" => "45",
    "peso" =>"81.50"
);
$aPacientes[] =array(
    "dni" => "27.356.487",
    "nombre" => "Miguel Mendez",
    "edad" => "10",
    "peso" =>"48.10"
);
$aPacientes[] =array(
    "dni" => "45.655.891",
    "nombre" => "Digna Benavidez",
    "edad" => "50",
    "peso" =>"70.56"
);
$aPacientes[] =array(
    "dni" => "19.648.111",
    "nombre" => "Noe Moreno",
    "edad" => "67",
    "peso" =>"89.80"
);


$aNotas = array(9, 8, 9.50, 4, 7, 8);
echo " <br> Cantidad de notas; ". contar($aNotas);
echo " <br> Cantidad de productos; ". contar($aProductos);
echo " <br> Cantidad de pacientes; ". contar($aPacientes);




?>