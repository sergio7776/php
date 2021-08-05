<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
/*Realizar una función que cuente la cantidada de elementos de un array, 
Es decir igual a la funcion ocunt() pero desarrollada por nosotros.*/
//Definición
$aPacientes = array();

$aPacientes[] = array(
    "dni" => "33.765.012",
    "nombre" => "Ana Acuña",
    "edad" => 45,
    "peso" => 81.50
);
$aPacientes[] = array(
    "dni" => "23.684.012",
    "nombre" => "Gonzalo Bustamane",
    "edad" => 66,
    "peso" => 79
);
$aPacientes[] = array(
    "dni" => "23.684.385",
    "nombre" => "Juan Irraola",
    "edad" => 28,
    "peso" => 79
);
$aPacientes[] = array(
    "dni" => "236.684.385",
    "nombre" => "Beatriz Ocampo",
    "edad" => 50,
    "peso" => 79
);

function contar($miarray){
    $cantidad=0;
    foreach ($miarray as $item){
    $cantidad++;
    }
    return $cantidad;
}
//Uso
echo "Cantidad de pacientes: " . contar($aPacientes);
?>