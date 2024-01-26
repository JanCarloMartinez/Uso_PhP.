<?php
//definicion
function promediar($aNumeros){
    $suma = 0;
    foreach ($aNumeros as $numero);{
    $suma += $numero;
}
    return $suma / count($aNumeros);
}

//Uso
$aNotas = array(8, 4, 3, 9, 1);
$aSueldos = array(800, 400, 500, 3000, 900, 10000);


echo "El promedio es:" , promediar($aNotas) , "<br>";
echo "El promedio es:" , promediar($aSueldos) . "<br>"

?>


<?php
//definicion
function maximo($aNumeros){
    $valorMaximo =0;
    foreach ($aVector as $valor){

}
    return $valorMaximo;
}

//Uso
$aNotas = array(8, 4, 3, 9, 1);
$aSueldos = array(800, 400, 500, 3000, 900, 10000);


echo "El promedio es:" , promediar($aNotas) , "<br>";
echo "El promedio es:" , promediar($aSueldos) . "<br>"

?>