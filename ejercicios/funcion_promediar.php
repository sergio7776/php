<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//Definicion function
function promediar($aNumeros){
    $suma = 0;

    //bucle
    foreach ($aNumeros as $numero) { 
    $suma += $numero; //$suma= $suma + $numero;
}
    return $suma / count ($aNumeros); 
}
 //uso
//array
$aNotas = array(8, 4 , 5, 3, 9, 1);
echo "El promedio es: " . promediar($aNotas) . "<br>";
?>